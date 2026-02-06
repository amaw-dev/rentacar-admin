<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Feature Flags Configuration
    |--------------------------------------------------------------------------
    |
    | Centralized feature toggles for gradual rollouts and A/B testing.
    |
    */

    'notifications' => [
        /*
        |--------------------------------------------------------------------------
        | WhatsApp Notification Provider
        |--------------------------------------------------------------------------
        |
        | Controls which service sends WhatsApp notifications:
        | - 'wati': Use WATI API (current production)
        | - 'ghl': Use GoHighLevel Conversations API
        | - 'both': Send via both providers (for testing/validation)
        |
        */
        'whatsapp_provider' => env('WHATSAPP_NOTIFICATION_PROVIDER', 'wati'),
    ],
];
