<?php

namespace App\Listeners\SendPendingReservationNotification;

use App\Events\SendReservationNotificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Enums\ReservationAPIStatus;
use App\Enums\ReservationStatus;

class SendPendingReservationNotificationListener implements ShouldQueue
{
    use InteractsWithQueue;

    public $tries = 2;

    public function shouldQueue(SendReservationNotificationEvent $event): bool
    {
        return $event->reservationAPIStatus === ReservationAPIStatus::Pending;
    }

}
