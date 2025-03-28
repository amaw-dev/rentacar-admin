<?php

namespace App\Mail\ReservationTotalInsuranceNotification;

use App\Models\Reservation;
use Illuminate\Mail\Mailables\Content;

class AlquilameReservationTotalInsuranceNotification extends ReservationTotalInsuranceNotification
{
    public $markdown = 'mail.total_insurance_notification.alquilame';
    public $emailFromConfig = "mail.mailers.alquilame.username";
    public $emailFromName = "Alquilame";

}
