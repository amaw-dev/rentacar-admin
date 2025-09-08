<?php

namespace App\Listeners\SendPendingReservationNotification;

use App\Events\NewReservationEvent;

class SendPendingReservationWhatsappNotificationListener  extends SendPendingReservationNotificationListener
{
    /**
     * Handle the event.
     */
    public function handle(NewReservationEvent $event): void
    {
        //
    }
}
