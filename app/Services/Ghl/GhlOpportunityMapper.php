<?php

namespace App\Services\Ghl;

use App\Enums\ReservationStatus;
use App\Models\Reservation;

class GhlOpportunityMapper
{
    /**
     * Custom fields that should be preserved when updating (not overwritten by reservation data).
     */
    protected static array $preservedCustomFields = [
        'sede_origen',
    ];

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
            'pipelineStageId' => $stageId,
            'status' => 'open',
            'monetaryValue' => (float) $reservation->total_price,
            'customFields' => self::buildCustomFields($reservation),
        ];

        return $data;
    }

    /**
     * Map a Reservation to GHL Opportunity data for update.
     *
     * @param Reservation $reservation The reservation to map
     * @param GhlClient $client The GHL client
     * @param array|null $existingOpportunity The existing opportunity data (to preserve certain custom fields)
     */
    public static function toGhlOpportunityUpdate(Reservation $reservation, GhlClient $client, ?array $existingOpportunity = null): array
    {
        $stageId = $client->getStageId(self::getStageKey($reservation->status));

        $newCustomFields = self::buildCustomFields($reservation);

        // Merge with existing custom fields, preserving specific fields like "sede_origen"
        if ($existingOpportunity) {
            $newCustomFields = self::mergeCustomFields($existingOpportunity['customFields'] ?? [], $newCustomFields);
        }

        $data = [
            'name' => self::buildOpportunityName($reservation),
            'monetaryValue' => (float) $reservation->total_price,
            'customFields' => $newCustomFields,
        ];

        // Only include stageId if it's a valid stage
        if ($stageId) {
            $data['pipelineStageId'] = $stageId;
        }

        return $data;
    }

    /**
     * Merge custom fields, preserving specific fields from existing data.
     *
     * @param array $existingFields Existing custom fields from GHL
     * @param array $newFields New custom fields from reservation
     * @return array Merged custom fields
     */
    protected static function mergeCustomFields(array $existingFields, array $newFields): array
    {
        // Extract preserved fields from existing data
        $preservedValues = [];
        foreach ($existingFields as $field) {
            $key = $field['key'] ?? $field['id'] ?? null;
            if ($key && in_array($key, self::$preservedCustomFields)) {
                $preservedValues[$key] = $field['value'] ?? $field['field_value'] ?? '';
            }
        }

        // Add preserved fields to new fields (if they have values and aren't already in new fields)
        $newFieldKeys = array_map(fn($f) => $f['key'] ?? '', $newFields);

        foreach ($preservedValues as $key => $value) {
            if (!empty($value) && !in_array($key, $newFieldKeys)) {
                $newFields[] = [
                    'key' => $key,
                    'field_value' => $value,
                ];
            }
        }

        return $newFields;
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
