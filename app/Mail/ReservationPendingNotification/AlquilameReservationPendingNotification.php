<?php

namespace App\Mail\ReservationPendingNotification;

use App\Models\Reservation;
use Illuminate\Mail\Mailables\Content;

class AlquilameReservationPendingNotification extends ReservationPendingNotification
{
    /**
     * Create a new message instance.
     */
    public function __construct(Reservation $reservation)
    {
        parent::__construct($reservation);
        $email = config('mail.mailers.alquilame.username');
        $this->from($email, "Alquilame");
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.pending_notification.alquilame',
            with: [
                'reserve_code'  => $this->reservation->reserve_code
            ]
        );
    }

}
