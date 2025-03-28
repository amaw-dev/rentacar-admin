<?php

namespace App\Mail\ReservationTotalInsuranceNotification;

use App\Models\Reservation;
use Illuminate\Mail\Mailables\Content;

class AlquilatucarroReservationTotalInsuranceNotification extends ReservationTotalInsuranceNotification
{
    public $markdown = 'mail.total_insurance_notification.alquilatucarro';
    public $emailFromConfig = "mail.mailers.alquilatucarro.username";
    public $emailFromName = "Alquilatucarro";

}
