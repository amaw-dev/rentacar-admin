<?php

namespace App\Mail\ReservationTotalInsuranceNotification;

use App\Models\Reservation;
use Illuminate\Mail\Mailables\Content;

class AlquicarrosReservationTotalInsuranceNotification extends ReservationTotalInsuranceNotification
{
    public $markdown = 'mail.total_insurance_notification.alquicarros';
    public $emailFromConfig = "mail.mailers.alquicarros.username";
    public $emailFromName = "Alquicarros";

}
