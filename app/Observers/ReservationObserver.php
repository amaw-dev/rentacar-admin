<?php

namespace App\Observers;

use App\Enums\ReservationStatus;
use App\Jobs\SendClientReservationNotificationJob;
use App\Jobs\SyncReservationToGhlJob;
use App\Models\Reservation;

use App\Events\SendReservationNotificationEvent;

class ReservationObserver
{
    public array $triggerClientNotificationStatuses = [
        ReservationStatus::Reservado->value,
        ReservationStatus::SinDisponibilidad->value,
    ];

    /**
     * Handle the Reservation "created" event.
     */
    public function created(Reservation $reservation): void
    {
        $this->syncToGhl($reservation);
    }

    /**
     * Handle the Reservation "updated" event.
     */
    public function updated(Reservation $reservation): void
    {
        if($reservation->wasChanged('status')){

            if(
                in_array($reservation->status, $this->triggerClientNotificationStatuses)
                && $reservation->reserve_code
            )
                SendReservationNotificationEvent::dispatch($reservation);
        }

        $this->syncToGhl($reservation);
    }

    /**
     * Sync reservation to GoHighLevel.
     */
    protected function syncToGhl(Reservation $reservation): void
    {
        // Only sync if GHL config exists for the franchise
        $franchise = $reservation->franchiseObject;
        if ($franchise && config("ghl.franchises.{$franchise->name}.api_key")) {
            SyncReservationToGhlJob::dispatch($reservation);
        }
    }

    /**
     * Handle the Reservation "deleted" event.
     */
    public function deleted(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "restored" event.
     */
    public function restored(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "force deleted" event.
     */
    public function forceDeleted(Reservation $reservation): void
    {
        //
    }
}
