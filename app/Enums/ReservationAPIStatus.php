<?php

namespace App\Enums;

enum ReservationAPIStatus: string {
    case Confirmed = "Confirmed";
    case Pending = "Pending";
}

