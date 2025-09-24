<?php

namespace App\Listeners\SendLocalizaTotalInsuranceReservationNotification;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use App\Events\SendReservationNotificationEvent;
use App\Mail\ReservationTotalInsuranceNotification\AlquilatucarroReservationTotalInsuranceNotification;
use App\Mail\ReservationTotalInsuranceNotification\AlquilameReservationTotalInsuranceNotification;
use App\Mail\ReservationTotalInsuranceNotification\AlquicarrosReservationTotalInsuranceNotification;
use App\Models\Reservation;

class SendLocalizaTotalInsuranceReservationMailNotificationListener extends SendLocalizaTotalInsuranceReservationNotificationListener
{
    public $franchisesEmails = [
        'alquilatucarro' => AlquilatucarroReservationTotalInsuranceNotification::class,
        'alquilame' => AlquilameReservationTotalInsuranceNotification::class,
        'alquicarros' => AlquicarrosReservationTotalInsuranceNotification::class,
    ];

    /**
     * Handle the event.
     */
    public function handle(SendReservationNotificationEvent $event): void
    {
        $reservation = $event->reservation;
        $franchise = $reservation->franchiseObject->name;

        if(!is_null($franchise)){
            try {
                // send to localiza a notification
                $franchiseEmail = $this->franchisesEmails[$franchise];

                Mail::mailer($franchise)
                ->send(new $franchiseEmail($reservation));

                Log::info("An total insurance reservation email notification was send to localiza board", $reservation->toArray());
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
                \Sentry\captureException($th);
            }
        }
        else Log::error("No franchise associated", $reservation->toArray());
    }
}
