<?php

namespace App\Mail;

use App\Models\Reservation;

class AlquilatucarroReservationRequest extends LocalizaReservationRequest
{

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        parent::__construct($reservation);
        $email = config('mail.mailers.alquilatucarro.username');
        $this->from($email, "Alquilatucarro");

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.alquilatucarro-reservation-request', [
            'reserva' => $this->reservation
        ]);
    }
}
