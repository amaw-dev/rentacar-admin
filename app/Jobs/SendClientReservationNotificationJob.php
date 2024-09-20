<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use App\Models\Reservation;
use App\Mail\ReservationClientNotification\AlquilatucarroReservationClientNotification;
use App\Mail\ReservationClientNotification\AlquilameReservationClientNotification;
use App\Mail\ReservationClientNotification\AlquicarrosReservationClientNotification;

use \Sentry\captureException;

class SendClientReservationNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $franchisesEmails = [
        'alquilatucarro' => AlquilatucarroReservationClientNotification::class,
        'alquilame' => AlquilameReservationClientNotification::class,
        'alquicarros' => AlquicarrosReservationClientNotification::class,
    ];
    public $reservation;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $franchise = $this->reservation->franchiseObject->name;

        if(!is_null($franchise)){
            try {
                // send to localiza a notification
                $franchiseEmail = $this->franchisesEmails[$franchise];

                Mail::mailer($franchise)
                ->send(new $franchiseEmail($this->reservation));
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
                captureException($th);
            }
        }
    }
}
