<?php

namespace App\Services\Ghl;

use App\Models\Reservation;

class GhlContactMapper
{
    /**
     * Map a Reservation to GHL Contact data for upsert.
     */
    public static function toGhlContact(Reservation $reservation): array
    {
        $names = self::splitFullName($reservation->fullname);
        $franchiseKey = GhlClient::getFranchiseKey($reservation->franchiseObject);

        $data = [
            'firstName' => $names['firstName'],
            'lastName' => $names['lastName'],
            'email' => $reservation->email,
            'phone' => self::formatPhone($reservation->phone),
            'locationId' => config("ghl.franchises.{$franchiseKey}.location_id"),
            'customFields' => [
                [
                    'key' => 'cedula',
                    'field_value' => $reservation->identification,
                ],
            ],
        ];

        return $data;
    }

    /**
     * Split fullname into firstName and lastName.
     */
    protected static function splitFullName(string $fullname): array
    {
        $parts = explode(' ', trim($fullname), 2);

        return [
            'firstName' => $parts[0] ?? '',
            'lastName' => $parts[1] ?? '',
        ];
    }

    /**
     * Format phone for GHL (ensure it has country code).
     */
    protected static function formatPhone(?string $phone): string
    {
        if (!$phone) {
            return '';
        }

        $phone = preg_replace('/[^0-9+]/', '', $phone);

        // If phone doesn't start with + or country code, assume Colombia (+57)
        if (!str_starts_with($phone, '+') && !str_starts_with($phone, '57')) {
            $phone = '+57' . $phone;
        } elseif (str_starts_with($phone, '57') && !str_starts_with($phone, '+')) {
            $phone = '+' . $phone;
        }

        return $phone;
    }
}
