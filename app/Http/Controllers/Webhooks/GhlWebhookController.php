<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Services\Ghl\GhlClient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GhlWebhookController extends Controller
{
    /**
     * Handle incoming GHL webhook.
     */
    public function handle(Request $request, string $franchise): JsonResponse
    {
        // Validate franchise exists in config
        if (!config("ghl.franchises.{$franchise}")) {
            Log::warning('GHL Webhook: Unknown franchise', ['franchise' => $franchise]);
            return response()->json(['error' => 'Unknown franchise'], 404);
        }

        // Validate webhook signature
        $signature = $request->header('X-Ghl-Signature');
        $payload = $request->getContent();

        if (!$this->validateSignature($franchise, $payload, $signature)) {
            Log::warning('GHL Webhook: Invalid signature', ['franchise' => $franchise]);
            return response()->json(['error' => 'Invalid signature'], 401);
        }

        $eventType = $request->input('type');
        $data = $request->all();

        Log::info('GHL Webhook received', [
            'franchise' => $franchise,
            'type' => $eventType,
        ]);

        try {
            match ($eventType) {
                'OpportunityStageUpdate' => $this->handleOpportunityStageUpdate($data, $franchise),
                'OpportunityUpdate' => $this->handleOpportunityUpdate($data, $franchise),
                'ContactUpdate' => $this->handleContactUpdate($data, $franchise),
                default => Log::info("GHL Webhook: Unhandled event type: {$eventType}"),
            };

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('GHL Webhook: Exception', [
                'franchise' => $franchise,
                'type' => $eventType,
                'error' => $e->getMessage(),
            ]);

            if (app()->bound('sentry')) {
                \Sentry\captureException($e);
            }

            return response()->json(['error' => 'Processing failed'], 500);
        }
    }

    /**
     * Validate webhook signature.
     */
    protected function validateSignature(string $franchise, string $payload, ?string $signature): bool
    {
        if (!$signature) {
            return false;
        }

        return GhlClient::validateWebhookSignature($franchise, $payload, $signature);
    }

    /**
     * Handle opportunity stage update event.
     */
    protected function handleOpportunityStageUpdate(array $data, string $franchise): void
    {
        $opportunityId = $data['id'] ?? $data['opportunityId'] ?? null;

        if (!$opportunityId) {
            Log::warning('GHL Webhook: Missing opportunity ID in stage update');
            return;
        }

        $reservation = Reservation::where('ghl_opportunity_id', $opportunityId)->first();

        if (!$reservation) {
            Log::info('GHL Webhook: No reservation found for opportunity', [
                'opportunity_id' => $opportunityId,
            ]);
            return;
        }

        // Map GHL stage back to reservation status if needed
        $newStageId = $data['stageId'] ?? $data['pipelineStageId'] ?? null;

        if ($newStageId) {
            $newStatus = $this->mapStageToStatus($franchise, $newStageId);

            if ($newStatus && $reservation->status !== $newStatus) {
                $reservation->status = $newStatus;
                $reservation->saveQuietly(); // Prevent triggering observer loop

                Log::info('GHL Webhook: Updated reservation status', [
                    'reservation_id' => $reservation->id,
                    'new_status' => $newStatus,
                ]);
            }
        }
    }

    /**
     * Handle opportunity update event.
     */
    protected function handleOpportunityUpdate(array $data, string $franchise): void
    {
        $opportunityId = $data['id'] ?? $data['opportunityId'] ?? null;

        if (!$opportunityId) {
            return;
        }

        $reservation = Reservation::where('ghl_opportunity_id', $opportunityId)->first();

        if (!$reservation) {
            return;
        }

        // Update monetary value if changed
        $monetaryValue = $data['monetaryValue'] ?? null;

        if ($monetaryValue !== null && (float) $reservation->total_price !== (float) $monetaryValue) {
            $reservation->total_price = $monetaryValue;
            $reservation->saveQuietly();

            Log::info('GHL Webhook: Updated reservation total_price', [
                'reservation_id' => $reservation->id,
                'new_total_price' => $monetaryValue,
            ]);
        }
    }

    /**
     * Handle contact update event.
     */
    protected function handleContactUpdate(array $data, string $franchise): void
    {
        $contactId = $data['id'] ?? $data['contactId'] ?? null;

        if (!$contactId) {
            return;
        }

        $reservations = Reservation::where('ghl_contact_id', $contactId)->get();

        if ($reservations->isEmpty()) {
            return;
        }

        // Update contact info on related reservations
        $updates = [];

        if (isset($data['email'])) {
            $updates['email'] = $data['email'];
        }

        if (isset($data['phone'])) {
            $updates['phone'] = $data['phone'];
        }

        if (isset($data['firstName']) || isset($data['lastName'])) {
            $firstName = $data['firstName'] ?? '';
            $lastName = $data['lastName'] ?? '';
            $updates['fullname'] = trim("{$firstName} {$lastName}");
        }

        if (!empty($updates)) {
            foreach ($reservations as $reservation) {
                $reservation->fill($updates);
                $reservation->saveQuietly();
            }

            Log::info('GHL Webhook: Updated reservations from contact', [
                'contact_id' => $contactId,
                'reservation_count' => $reservations->count(),
                'updates' => array_keys($updates),
            ]);
        }
    }

    /**
     * Map GHL stage ID to reservation status.
     */
    protected function mapStageToStatus(string $franchise, string $stageId): ?string
    {
        $stages = config("ghl.franchises.{$franchise}.stages", []);

        $statusMap = [
            $stages['pendiente'] ?? null => 'Pendiente',
            $stages['reservado'] ?? null => 'Reservado',
            $stages['sin_disponibilidad'] ?? null => 'Sin disponibilidad',
            $stages['mensualidad'] ?? null => 'Mensualidad',
        ];

        return $statusMap[$stageId] ?? null;
    }
}
