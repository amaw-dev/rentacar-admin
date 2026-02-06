<?php

namespace App\Listeners\SendClientReservationNotification;

use App\Enums\ReservationStatus;
use App\Events\NewMonthlyReservationEvent;
use App\Events\SendReservationNotificationEvent;
use App\Facades\Wati;
use App\Jobs\SendGhlWhatsAppNotificationJob;
use App\Models\Reservation;
use Exception;
use Illuminate\Support\Facades\Log;

class SendClientReservationWhatsappNotificationListener extends SendClientReservationNotificationListener
{

    public $templateMessages;
    public $today;

    public function sendPendingReservationNotification(Reservation $reservation): void
    {
        $franchiseName = $reservation->franchiseObject->name;
        $reservationCode = $reservation->reserve_code;
        $whatsappNumber = $reservation->phone;
        $userName = $reservation->fullname;

        $params = [
            [
                'name' => 'fullname',
                'value' => $userName,
            ],
            [
                'name' => 'franchise_name',
                'value' => $franchiseName,
            ],
        ];

        $baseLog = "Pending Reservation Notification";
        $successLog = "{$baseLog} Code: {$reservationCode} sent {$this->today}";
        $errorLog = "{$baseLog} Error sending notification {$this->today}";

        $templateName = $this->templateMessages[ReservationStatus::Pendiente->value];
        $broadcastName =  "RP {$reservationCode}";

        $this->sendReservationNotification(
            $whatsappNumber,
            $templateName,
            $broadcastName,
            $params,
            $successLog,
            $errorLog
        );
    }

    public function sendMonthReservationNotification(Reservation $reservation): void
    {
        $franchiseName = $reservation->franchiseObject->name;
        $reservationCode = $reservation->reserve_code;
        $whatsappNumber = $reservation->phone;
        $userName = $reservation->fullname;

        $params = [
            [
                'name' => 'fullname',
                'value' => $userName,
            ],
            [
                'name' => 'franchise_name',
                'value' => $franchiseName,
            ],
        ];

        $baseLog = "Month Reservation Notification";
        $successLog = "{$baseLog} Code: {$reservationCode} sent {$this->today}";
        $errorLog = "{$baseLog} Error sending notification {$this->today}";

        $templateName = $this->templateMessages[ReservationStatus::Mensualidad->value];
        $broadcastName =  "RM {$reservationCode}";

        $this->sendReservationNotification(
            $whatsappNumber,
            $templateName,
            $broadcastName,
            $params,
            $successLog,
            $errorLog
        );
    }

    public function sendReservedReservationNotification(Reservation $reservation): void
    {
        $franchiseName = $reservation->franchiseObject->name;
        $reservationCode = $reservation->reserve_code;
        $whatsappNumber = $reservation->phone;
        $userName = $reservation->fullname;

        $baseLog = "New Reservation Notification";
        $successLog = "{$baseLog} Code: {$reservationCode} sent {$this->today}";
        $errorLog = "{$baseLog} Error sending notification {$this->today}";

        $templateName = $this->templateMessages[ReservationStatus::Reservado->value];
        $broadcastName = "NR {$reservationCode}";

        $params = [
            [
                'name' => 'fullname',
                'value' => $userName,
            ],
            [
                'name' => 'reservation_code',
                'value' => $reservationCode,
            ],
            [
                'name' => 'pickup_date',
                'value' => $reservation->pickup_date->locale('es')->isoFormat('LL'),
            ],
            [
                'name' => 'pickup_hour',
                'value' => $reservation->pickup_hour->format('H:i a'),
            ],
            [
                'name' => 'pickup_location',
                'value' => $reservation->pickupLocation->name,
            ],
            [
                'name' => 'pickup_location_address',
                'value' => $reservation->pickupLocation->pickup_address,
            ],
            [
                'name' => 'pickup_location_map',
                'value' => $reservation->pickupLocation->pickup_map,
            ],
            [
                'name' => 'return_date',
                'value' => $reservation->return_date->locale('es')->isoFormat('LL'),
            ],
            [
                'name' => 'return_hour',
                'value' => $reservation->return_hour->format('H:i a'),
            ],
            [
                'name' => 'return_location',
                'value' => $reservation->returnLocation->name,
            ],
            [
                'name' => 'return_location_address',
                'value' => $reservation->returnLocation->return_address ?? $reservation->returnLocation->pickup_address,
            ],
            [
                'name' => 'return_location_map',
                'value' => $reservation->returnLocation->return_map ?? $reservation->returnLocation->pickup_map,
            ],
            [
                'name' => 'franchise_name',
                'value' => $franchiseName,
            ],
        ];

        $this->sendReservationNotification(
            $whatsappNumber,
            $templateName,
            $broadcastName,
            $params,
            $successLog,
            $errorLog,
        );

        $this->sendReservedReservationNotificationInstructions($reservation);
        $this->sendReservedReservationNotificationInstructionsAdditional($reservation);
    }

    public function sendReservedReservationNotificationInstructions(Reservation $reservation): void
    {
        $reservationCode = $reservation->reserve_code;
        $whatsappNumber = $reservation->phone;
        $userName = $reservation->fullname;
        $params = [];

        $templateName = 'nueva_reserva_instrucciones_2';
        $broadcastName = "NRI {$reservationCode}";

        $baseLog = "Reservation Instructions Notification";
        $successLog = "{$baseLog} Code: {$reservationCode} sent {$this->today}";
        $errorLog = "{$baseLog} Error sending notification {$this->today}";

        $this->sendReservationNotification(
            $whatsappNumber,
            $templateName,
            $broadcastName,
            $params,
            $successLog,
            $errorLog,
        );
    }

    public function sendReservedReservationNotificationInstructionsAdditional(Reservation $reservation): void
    {
        $reservationCode = $reservation->reserve_code;
        $whatsappNumber = $reservation->phone;
        $userName = $reservation->fullname;
        $params = [];

        $templateName = 'nueva_reserva_instrucciones_adicionales';
        $broadcastName = "NRIA {$reservationCode}";

        $baseLog = "Reservation More Instructions Notification";
        $successLog = "{$baseLog} Code: {$reservationCode} sent {$this->today}";
        $errorLog = "{$baseLog} Error sending notification {$this->today}";

        $this->sendReservationNotification(
            $whatsappNumber,
            $templateName,
            $broadcastName,
            $params,
            $successLog,
            $errorLog,
        );
    }

    public function sendFailedReservationNotification(Reservation $reservation): void
    {
        $franchiseReservationWebsite = $reservation->franchiseObject->reserva_button;
        $reservationCode = $reservation->reserve_code;
        $whatsappNumber = $reservation->phone;
        $userName = $reservation->fullname;
        $params = [
            [
                'name' => 'fullname',
                'value' => $userName,
            ],
            [
                'name' => 'franchise_reservation_website',
                'value' => $franchiseReservationWebsite,
            ]
        ];

        $baseLog = "Failed Notification";
        $successLog = "{$baseLog} Code: {$reservationCode} sent {$this->today}";
        $errorLog = "{$baseLog} Error sending notification {$this->today}";

        $templateName = $this->templateMessages[ReservationStatus::SinDisponibilidad->value];
        $broadcastName = "FR {$reservationCode}";

        $this->sendReservationNotification(
            $whatsappNumber,
            $templateName,
            $broadcastName,
            $params,
            $successLog,
            $errorLog
        );
    }


    public function sendReservationNotification(
        string $whatsappNumber,
        string $templateName,
        string $broadcastName,
        array $params,
        string $successLog = '',
        string $errorLog = '',
    ): void
    {
        try {
            $response = Wati::sendTemplateMessage($whatsappNumber, $templateName, $broadcastName, $params);
            $result = $response['result'] ?? false;

            if ($response['result']) {
                Log::info($successLog);
            } else {
                throw new Exception($errorLog . json_encode($response));
            }
        } catch (Exception $e) {
            Log::error($errorLog . " - " . $e->getMessage());
        }
    }

    public function selectReservationNotificationMethodByStatus(string|ReservationStatus $status): ?string
    {
        $sendingMethods = [
            ReservationStatus::Reservado->value => 'sendReservedReservationNotification',
            ReservationStatus::Pendiente->value => 'sendPendingReservationNotification',
            ReservationStatus::SinDisponibilidad->value => 'sendFailedReservationNotification',
            ReservationStatus::Mensualidad->value => 'sendMonthReservationNotification',
        ];

        $statusValue = $status instanceof ReservationStatus ? $status->value : (string) $status;
        return $sendingMethods[$statusValue] ?? null;
    }


    /**
     * Handle the event.
     */
    public function handle(SendReservationNotificationEvent|NewMonthlyReservationEvent $event): void
    {
        $reservation = $event->reservation;
        $provider = config('features.notifications.whatsapp_provider', 'wati');

        // Send via WATI if provider is 'wati' or 'both'
        if (in_array($provider, ['wati', 'both'])) {
            $this->sendViaWati($reservation);
        }

        // Send via GHL if provider is 'ghl' or 'both'
        if (in_array($provider, ['ghl', 'both'])) {
            $this->sendViaGhl($reservation);
        }
    }

    /**
     * Send notification via WATI (legacy provider).
     */
    protected function sendViaWati(Reservation $reservation): void
    {
        $this->today = now()->format('Y-m-d');

        $this->templateMessages = [
            ReservationStatus::Reservado->value => 'nueva_reserva_5',
            ReservationStatus::Pendiente->value => 'reserva_pendiente',
            ReservationStatus::SinDisponibilidad->value => 'reserva_sin_disponibilidad',
            ReservationStatus::Mensualidad->value => 'reserva_mensual',
        ];

        $status = $reservation->status instanceof ReservationStatus
            ? $reservation->status->value
            : (string) $reservation->status;

        $methodName = $this->selectReservationNotificationMethodByStatus($status);

        if ($methodName && method_exists($this, $methodName)) {
            $this->$methodName($reservation);
        } else {
            throw new Exception("Método de notificación no encontrado para el estado: {$status}");
        }
    }

    /**
     * Send notification via GHL (new provider).
     */
    protected function sendViaGhl(Reservation $reservation): void
    {
        SendGhlWhatsAppNotificationJob::dispatch($reservation);

        Log::info('SendClientReservationWhatsappNotificationListener: GHL job dispatched', [
            'reservation_id' => $reservation->id,
            'status' => $reservation->status->value ?? $reservation->status,
        ]);
    }
}
