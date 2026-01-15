<?php

namespace App\Services\Ghl;

use App\Enums\ReservationStatus;
use App\Models\Reservation;

class GhlOpportunityMapper
{
    /**
     * Map ReservationStatus to GHL stage config key.
     */
    protected static array $statusToStageKey = [
        'Nueva' => 'pendiente',
        'Pendiente' => 'pendiente',
        'Reservado' => 'reservado',
        'Sin disponibilidad' => 'sin_disponibilidad',
        'Mensualidad' => 'mensualidad',
        // Other statuses fall back to current stage or pendiente
    ];

    /**
     * Map a Reservation to GHL Opportunity data for create.
     */
    public static function toGhlOpportunity(Reservation $reservation, GhlClient $client): array
    {
        $stageId = $client->getStageId(self::getStageKey($reservation->status));

        $data = [
            'name' => self::buildOpportunityName($reservation),
            'stageId' => $stageId,
            'status' => 'open',
            'monetaryValue' => (float) $reservation->total_price,
            'customFields' => self::buildCustomFields($reservation),
        ];

        return $data;
    }

    /**
     * Map a Reservation to GHL Opportunity data for update.
     */
    public static function toGhlOpportunityUpdate(Reservation $reservation, GhlClient $client): array
    {
        $stageId = $client->getStageId(self::getStageKey($reservation->status));

        $data = [
            'name' => self::buildOpportunityName($reservation),
            'monetaryValue' => (float) $reservation->total_price,
            'customFields' => self::buildCustomFields($reservation),
        ];

        // Only include stageId if it's a valid stage
        if ($stageId) {
            $data['stageId'] = $stageId;
        }

        return $data;
    }

    /**
     * Build opportunity name from reservation.
     */
    protected static function buildOpportunityName(Reservation $reservation): string
    {
        $code = $reservation->reserve_code ?? 'SIN-CODIGO';
        $category = $reservation->categoryObject->name ?? '';

        return "{$code} - {$category}";
    }

    /**
     * Build custom fields array for GHL.
     */
    protected static function buildCustomFields(Reservation $reservation): array
    {
        return [
            [
                'key' => 'fecha_recogida',
                'field_value' => $reservation->pickup_date?->format('Y-m-d') ?? '',
            ],
            [
                'key' => 'fecha_devolucion',
                'field_value' => $reservation->return_date?->format('Y-m-d') ?? '',
            ],
            [
                'key' => 'hora_recogida',
                'field_value' => $reservation->pickup_hour?->format('H:i') ?? '',
            ],
            [
                'key' => 'hora_devolucion',
                'field_value' => $reservation->return_hour?->format('H:i') ?? '',
            ],
            [
                'key' => 'categoria',
                'field_value' => $reservation->categoryObject->name ?? '',
            ],
            [
                'key' => 'lugar_recogida',
                'field_value' => $reservation->pickupLocation->name ?? '',
            ],
            [
                'key' => 'lugar_devolucion',
                'field_value' => $reservation->returnLocation->name ?? '',
            ],
            [
                'key' => 'codigo_reserva',
                'field_value' => $reservation->reserve_code ?? '',
            ],
            [
                'key' => 'estado_reserva',
                'field_value' => $reservation->status ?? '',
            ],
        ];
    }

    /**
     * Get stage key from reservation status.
     */
    protected static function getStageKey(?string $status): string
    {
        return self::$statusToStageKey[$status] ?? 'pendiente';
    }

    /**
     * Check if reservation status has a mapped GHL stage.
     */
    public static function hasGhlStage(?string $status): bool
    {
        return isset(self::$statusToStageKey[$status]);
    }
}
