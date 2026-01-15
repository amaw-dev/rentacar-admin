<?php

namespace App\Providers;

use App\Services\Ghl\GhlClient;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class GhlServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(GhlClient::class, function ($app) {
            return new GhlClient();
        });

        $this->app->alias(GhlClient::class, 'ghl');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [GhlClient::class, 'ghl'];
    }
}
