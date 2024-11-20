<?php

namespace App\Mail\ReservationPendingNotification;

use App\Models\Reservation;
use Illuminate\Mail\Mailables\Content;

class AlquilatucarroReservationPendingNotification extends ReservationPendingNotification
{
    /**
     * Create a new message instance.
     */
    public function __construct(Reservation $reservation)
    {
        parent::__construct($reservation);
        $email = config('mail.mailers.alquilatucarro.username');
        $this->from($email, "Alquilatucarro");
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.pending_notification.alquilatucarro',
            with: [
                'reserve_code'  => $this->reservation->reserve_code
            ]
        );
    }

}
