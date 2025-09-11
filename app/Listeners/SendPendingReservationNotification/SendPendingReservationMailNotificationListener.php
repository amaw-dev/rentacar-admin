<?php

namespace App\Listeners\SendPendingReservationNotification;

use App\Events\NewReservationEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use App\Mail\ReservationPendingNotification\AlquilatucarroReservationPendingNotification;
use App\Mail\ReservationPendingNotification\AlquilameReservationPendingNotification;
use App\Mail\ReservationPendingNotification\AlquicarrosReservationPendingNotification;
use App\Models\Reservation;

class SendPendingReservationMailNotificationListener extends SendPendingReservationNotificationListener
{
    public $franchisesEmails = [
        'alquilatucarro' => AlquilatucarroReservationPendingNotification::class,
        'alquilame' => AlquilameReservationPendingNotification::class,
        'alquicarros' => AlquicarrosReservationPendingNotification::class,
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
                // send to localiza a notification
                $franchiseEmail = $this->franchisesEmails[$franchise];

                Mail::mailer($franchise)
                ->send( new $franchiseEmail($reservation));

                Log::info("An email was send to localiza board", $reservation->toArray());
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
                \Sentry\captureException($th);
            }
        }
        else Log::error("No franchise associated", $reservation->toArray());
    }
}
