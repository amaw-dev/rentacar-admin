<?php

namespace App\Jobs;

use App\Models\Reservation;
use App\Services\Ghl\GhlClient;
use App\Services\Ghl\GhlContactMapper;
use App\Services\Ghl\GhlOpportunityMapper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SyncReservationToGhlJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;
    public int $backoff = 60;

    protected Reservation $reservation;

    /**
     * Create a new job instance.
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Execute the job.
     */
    public function handle(GhlClient $ghlClient): void
    {
        $franchise = $this->reservation->franchiseObject;

        if (!$franchise) {
            Log::warning('SyncReservationToGhlJob: No franchise associated', [
                'reservation_id' => $this->reservation->id,
            ]);
            return;
        }

        $franchiseKey = GhlClient::getFranchiseKey($franchise);

        // Check if GHL is configured for this franchise
        if (!config("ghl.franchises.{$franchiseKey}.api_key")) {
            Log::info("SyncReservationToGhlJob: GHL not configured for franchise {$franchiseKey}");
            return;
        }

        try {
            $client = $ghlClient->forFranchise($franchiseKey);

            // Step 1: Upsert Contact
            $contactData = GhlContactMapper::toGhlContact($this->reservation);
            $contact = $client->upsertContact($contactData);

            if (!$contact) {
                Log::error('SyncReservationToGhlJob: Failed to upsert contact', [
                    'reservation_id' => $this->reservation->id,
                    'franchise' => $franchiseKey,
                ]);
                return;
            }

            $contactId = $contact['id'];

            // Update reservation with GHL contact ID if changed
            if ($this->reservation->ghl_contact_id !== $contactId) {
                $this->reservation->ghl_contact_id = $contactId;
            }

            // Step 2: Create or Update Opportunity
            if ($this->reservation->ghl_opportunity_id) {
                // Update existing opportunity (already linked)
                $opportunityData = GhlOpportunityMapper::toGhlOpportunityUpdate($this->reservation, $client);
                $opportunity = $client->updateOpportunity($this->reservation->ghl_opportunity_id, $opportunityData);

                if (!$opportunity) {
                    Log::error('SyncReservationToGhlJob: Failed to update opportunity', [
                        'reservation_id' => $this->reservation->id,
                        'opportunity_id' => $this->reservation->ghl_opportunity_id,
                        'franchise' => $franchiseKey,
                    ]);
                }
            } else {
                // Search for existing "Cotizado" opportunity for this contact
                // This maintains traceability when staff quotes via WhatsApp and client completes via web
                $cotizadoStageId = $client->getStageId('cotizado');
                $existingOpportunity = null;

                if ($cotizadoStageId) {
                    $existingOpportunities = $client->searchOpportunitiesByContact($contactId, $cotizadoStageId);

                    if (!empty($existingOpportunities)) {
                        // Use the most recent one (first in array)
                        $existingOpportunity = $existingOpportunities[0];
                    }
                }

                if ($existingOpportunity) {
                    // Link to existing "Cotizado" opportunity and update it
                    $this->reservation->ghl_opportunity_id = $existingOpportunity['id'];
                    $opportunityData = GhlOpportunityMapper::toGhlOpportunityUpdate($this->reservation, $client);
                    $opportunity = $client->updateOpportunity($existingOpportunity['id'], $opportunityData);

                    Log::info('SyncReservationToGhlJob: Linked to existing Cotizado opportunity', [
                        'reservation_id' => $this->reservation->id,
                        'opportunity_id' => $existingOpportunity['id'],
                        'franchise' => $franchiseKey,
                    ]);
                } else {
                    // No existing Cotizado opportunity found, create new
                    $opportunityData = GhlOpportunityMapper::toGhlOpportunity($this->reservation, $client);
                    $opportunity = $client->createOpportunity($contactId, $opportunityData);

                    if ($opportunity) {
                        $this->reservation->ghl_opportunity_id = $opportunity['id'];
                    } else {
                        Log::error('SyncReservationToGhlJob: Failed to create opportunity', [
                            'reservation_id' => $this->reservation->id,
                            'contact_id' => $contactId,
                            'franchise' => $franchiseKey,
                        ]);
                    }
                }
            }

            // Update sync timestamp and save quietly to avoid loops
            $this->reservation->ghl_last_sync = now();
            $this->reservation->saveQuietly();

            Log::info('SyncReservationToGhlJob: Sync completed', [
                'reservation_id' => $this->reservation->id,
                'ghl_contact_id' => $this->reservation->ghl_contact_id,
                'ghl_opportunity_id' => $this->reservation->ghl_opportunity_id,
                'franchise' => $franchiseKey,
            ]);

        } catch (\Exception $e) {
            Log::error('SyncReservationToGhlJob: Exception', [
                'reservation_id' => $this->reservation->id,
                'franchise' => $franchiseKey,
                'error' => $e->getMessage(),
            ]);

            if (app()->bound('sentry')) {
                \Sentry\captureException($e);
            }

            throw $e;
        }
    }
}
