<?php

namespace App\Console\Commands\Ghl;

use App\Services\Ghl\GhlClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TestGhlConnection extends Command
{
    protected $signature = 'ghl:test-connection {franchise=alquilame}';
    protected $description = 'Test GHL API connection and diagnose authentication issues';

    public function handle(): int
    {
        $franchise = $this->argument('franchise');
        $this->info("Testing GHL connection for franchise: {$franchise}");
        $this->newLine();

        // Check config exists
        $config = config("ghl.franchises.{$franchise}");
        if (!$config) {
            $this->error("❌ Franchise '{$franchise}' not configured in ghl.franchises");
            return 1;
        }

        $this->info("✓ Configuration found");
        $this->table(
            ['Key', 'Value'],
            [
                ['api_key', substr($config['api_key'] ?? 'NOT SET', 0, 20) . '...'],
                ['location_id', $config['location_id'] ?? 'NOT SET'],
                ['pipeline_id', $config['pipeline_id'] ?? 'NOT SET'],
            ]
        );
        $this->newLine();

        // Test 1: Location info (requires locations.readonly)
        $this->info("Test 1: Fetching location info...");
        $baseUrl = config('ghl.api_base_url');
        $version = config('ghl.api_version');
        $locationId = $config['location_id'];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $config['api_key'],
            'Version' => $version,
        ])->get("{$baseUrl}/locations/{$locationId}");

        if ($response->successful()) {
            $location = $response->json('location') ?? $response->json();
            $this->info("✓ Location access OK");
            $this->line("  Name: " . ($location['name'] ?? 'N/A'));
        } else {
            $this->error("❌ Location access FAILED");
            $this->line("  Status: " . $response->status());
            $this->line("  Body: " . json_encode($response->json()));
            $this->newLine();
            $this->warn("→ Verifica que el token tiene scope 'locations.readonly'");
        }
        $this->newLine();

        // Test 2: Contact search (requires contacts.readonly)
        $this->info("Test 2: Testing contact search...");
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $config['api_key'],
            'Version' => $version,
        ])->get("{$baseUrl}/contacts/search/duplicate", [
            'locationId' => $locationId,
            'email' => 'test@example.com',
        ]);

        if ($response->successful()) {
            $this->info("✓ Contact search OK (contacts.readonly scope working)");
        } else {
            $this->error("❌ Contact search FAILED");
            $this->line("  Status: " . $response->status());
            $this->line("  Body: " . json_encode($response->json()));
            $this->newLine();
            $this->warn("→ Verifica que el token tiene scope 'contacts.readonly'");
        }
        $this->newLine();

        // Test 3: Contact upsert (requires contacts.write) - dry run with minimal data
        $this->info("Test 3: Testing contact upsert (contacts.write scope)...");
        $testData = [
            'locationId' => $locationId,
            'email' => 'ghl-test-' . time() . '@test-rentacar.local',
            'firstName' => 'GHL',
            'lastName' => 'Test',
            'tags' => ['ghl-connection-test'],
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $config['api_key'],
            'Version' => $version,
        ])->post("{$baseUrl}/contacts/upsert", $testData);

        if ($response->successful()) {
            $contact = $response->json('contact');
            $this->info("✓ Contact upsert OK (contacts.write scope working)");
            $this->line("  Contact ID: " . ($contact['id'] ?? 'N/A'));

            // Clean up test contact
            if (isset($contact['id'])) {
                Http::withHeaders([
                    'Authorization' => 'Bearer ' . $config['api_key'],
                    'Version' => $version,
                ])->delete("{$baseUrl}/contacts/{$contact['id']}");
                $this->line("  (Test contact cleaned up)");
            }
        } else {
            $this->error("❌ Contact upsert FAILED - THIS IS THE PRODUCTION ERROR");
            $this->line("  Status: " . $response->status());
            $this->line("  Body: " . json_encode($response->json()));
            $this->newLine();
            $this->warn("→ Verifica que el token tiene scope 'contacts.write'");
            $this->warn("→ En GHL: Settings → Integrations → Private Integrations → Edit → Scopes");
        }
        $this->newLine();

        // Summary
        $this->info("=== Resumen ===");
        $this->line("API Base URL: {$baseUrl}");
        $this->line("API Version: {$version}");
        $this->line("Location ID: {$locationId}");
        $this->newLine();

        $this->info("Scopes requeridos para upsertContact:");
        $this->line("  - contacts.write (crear/actualizar contactos)");
        $this->line("  - contacts.readonly (buscar contactos existentes)");
        $this->line("  - locations.readonly (validar location_id)");

        return 0;
    }
}
