<?php

namespace App\Listeners\SendClientReservationNotification;

use App\Events\NewReservationEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use App\Models\Reservation;
use App\Enums\ReservationStatus;
use App\Mail\ReservationClientNotification\Reserved\AlquilatucarroReservedReservationClientNotification;
use App\Mail\ReservationClientNotification\Reserved\AlquilameReservedReservationClientNotification;
use App\Mail\ReservationClientNotification\Reserved\AlquicarrosReservedReservationClientNotification;
use App\Mail\ReservationClientNotification\Pending\AlquilatucarroPendingReservationClientNotification;
use App\Mail\ReservationClientNotification\Pending\AlquilamePendingReservationClientNotification;
use App\Mail\ReservationClientNotification\Pending\AlquicarrosPendingReservationClientNotification;
use App\Mail\ReservationClientNotification\Failed\AlquilatucarroFailedReservationClientNotification;
use App\Mail\ReservationClientNotification\Failed\AlquilameFailedReservationClientNotification;
use App\Mail\ReservationClientNotification\Failed\AlquicarrosFailedReservationClientNotification;

class SendClientReservationMailNotificationListener extends SendClientReservationNotificationListener
{
    public $franchisesEmails = [
        'alquilatucarro' => [
            ReservationStatus::Reservado->value  =>  AlquilatucarroReservedReservationClientNotification::class,
            ReservationStatus::Pendiente->value  =>  AlquilatucarroPendingReservationClientNotification::class,
            ReservationStatus::SinDisponibilidad->value  =>  AlquilatucarroFailedReservationClientNotification::class,
        ],
        'alquilame' => [
            ReservationStatus::Reservado->value  =>  AlquilameReservedReservationClientNotification::class,
            ReservationStatus::Pendiente->value  =>  AlquilamePendingReservationClientNotification::class,
            ReservationStatus::SinDisponibilidad->value  =>  AlquilameFailedReservationClientNotification::class,
        ],
        'alquicarros' => [
            ReservationStatus::Reservado->value  =>  AlquicarrosReservedReservationClientNotification::class,
            ReservationStatus::Pendiente->value  =>  AlquicarrosPendingReservationClientNotification::class,
            ReservationStatus::SinDisponibilidad->value  =>  AlquicarrosFailedReservationClientNotification::class,
        ],
    ];

    /**
     * Handle the event.
     */
    public function handle(NewReservationEvent $event): void
    {
        $reservation = $event->reservation;
        $franchise = $reservation->franchiseObject->name;

        if(!is_null($franchise)){
            try {
                $reservationStatus = ReservationStatus::tryFrom($reservation->status);

                // send to client a notification
                $franchiseEmail = $this->franchisesEmails[$franchise][$reservationStatus->value];

                Mail::mailer($franchise)
                ->to($reservation->email)
                ->send(new $franchiseEmail($reservation));

                Log::info("An email was send to {$reservation->email}", $reservation->toArray());
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
                \Sentry\captureException($th);
            }
        }
        else Log::error("No franchise associated", $reservation->toArray());
    }
}
