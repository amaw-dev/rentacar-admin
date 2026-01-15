<?php

namespace App\Services\Ghl;

use App\Models\Franchise;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class GhlClient
{
    protected ?string $franchiseKey = null;
    protected ?array $config = null;

    /**
     * Set the franchise context for API calls.
     */
    public function forFranchise(string|Franchise $franchise): self
    {
        $franchiseKey = $franchise instanceof Franchise
            ? self::getFranchiseKey($franchise)
            : $franchise;

        $this->franchiseKey = $franchiseKey;
        $this->config = config("ghl.franchises.{$franchiseKey}");

        if (!$this->config) {
            throw new \InvalidArgumentException("GHL configuration not found for franchise: {$franchiseKey}");
        }

        return $this;
    }

    /**
     * Convert Franchise model to config key.
     */
    public static function getFranchiseKey(Franchise $franchise): string
    {
        return Str::slug($franchise->name, '');
    }

    /**
     * Create or update a contact.
     */
    public function upsertContact(array $data): ?array
    {
        $this->ensureFranchiseSet();

        try {
            $response = $this->client()->post('/contacts/upsert', $data);

            if ($response->successful()) {
                return $response->json('contact');
            }

            Log::error('GHL upsertContact failed', [
                'franchise' => $this->franchiseKey,
                'status' => $response->status(),
                'body' => $response->json(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('GHL upsertContact exception', [
                'franchise' => $this->franchiseKey,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Find contact by email.
     */
    public function findContactByEmail(string $email): ?array
    {
        $this->ensureFranchiseSet();

        try {
            $response = $this->client()->get('/contacts/search', [
                'email' => $email,
                'locationId' => $this->config['location_id'],
            ]);

            if ($response->successful()) {
                $contacts = $response->json('contacts', []);
                return $contacts[0] ?? null;
            }

            return null;
        } catch (\Exception $e) {
            Log::error('GHL findContactByEmail exception', [
                'franchise' => $this->franchiseKey,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Find contact by phone.
     */
    public function findContactByPhone(string $phone): ?array
    {
        $this->ensureFranchiseSet();

        try {
            $response = $this->client()->get('/contacts/search', [
                'phone' => $phone,
                'locationId' => $this->config['location_id'],
            ]);

            if ($response->successful()) {
                $contacts = $response->json('contacts', []);
                return $contacts[0] ?? null;
            }

            return null;
        } catch (\Exception $e) {
            Log::error('GHL findContactByPhone exception', [
                'franchise' => $this->franchiseKey,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Create an opportunity.
     */
    public function createOpportunity(string $contactId, array $data): ?array
    {
        $this->ensureFranchiseSet();

        $data['contactId'] = $contactId;
        $data['pipelineId'] = $this->config['pipeline_id'];

        try {
            $response = $this->client()->post('/opportunities/', $data);

            if ($response->successful()) {
                return $response->json('opportunity');
            }

            Log::error('GHL createOpportunity failed', [
                'franchise' => $this->franchiseKey,
                'status' => $response->status(),
                'body' => $response->json(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('GHL createOpportunity exception', [
                'franchise' => $this->franchiseKey,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Update an opportunity.
     */
    public function updateOpportunity(string $opportunityId, array $data): ?array
    {
        $this->ensureFranchiseSet();

        try {
            $response = $this->client()->put("/opportunities/{$opportunityId}", $data);

            if ($response->successful()) {
                return $response->json('opportunity');
            }

            Log::error('GHL updateOpportunity failed', [
                'franchise' => $this->franchiseKey,
                'status' => $response->status(),
                'body' => $response->json(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('GHL updateOpportunity exception', [
                'franchise' => $this->franchiseKey,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Get the stage ID for a reservation status.
     */
    public function getStageId(string $status): ?string
    {
        $this->ensureFranchiseSet();

        $statusKey = Str::slug($status, '_');
        return $this->config['stages'][$statusKey] ?? null;
    }

    /**
     * Get the configured HTTP client.
     */
    protected function client(): PendingRequest
    {
        $baseUrl = config('ghl.api_base_url');
        $version = config('ghl.api_version');
        $timeout = config('ghl.timeout', 30);

        return Http::baseUrl($baseUrl)
            ->timeout($timeout)
            ->withHeaders([
                'Authorization' => 'Bearer ' . $this->config['api_key'],
                'Version' => $version,
            ])
            ->acceptJson();
    }

    /**
     * Ensure franchise is set before API calls.
     */
    protected function ensureFranchiseSet(): void
    {
        if (!$this->franchiseKey || !$this->config) {
            throw new \RuntimeException('Franchise must be set before making API calls. Use forFranchise() first.');
        }
    }

    /**
     * Validate webhook signature.
     */
    public static function validateWebhookSignature(string $franchiseKey, string $payload, string $signature): bool
    {
        $secret = config("ghl.franchises.{$franchiseKey}.webhook_secret");

        if (!$secret) {
            return false;
        }

        $expectedSignature = hash_hmac('sha256', $payload, $secret);

        return hash_equals($expectedSignature, $signature);
    }
}
