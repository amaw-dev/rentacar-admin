<?php

namespace App\Listeners\SendLocalizaTotalInsuranceReservationNotification;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\SendReservationNotificationEvent;

class SendLocalizaTotalInsuranceReservationNotificationListener implements ShouldQueue
{
    use InteractsWithQueue;

    public $tries = 2;

    public function shouldQueue(SendReservationNotificationEvent $event): bool
    {
        return ($event->reservation->total_insurance) ? true : false;
    }

}
