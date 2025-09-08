<?php

namespace App\Listeners\SendClientReservationNotification;

use App\Events\NewReservationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendClientReservationNotificationListener implements ShouldQueue
{
    use InteractsWithQueue;

    public $tries = 2;

}
