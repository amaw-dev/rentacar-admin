<?php

namespace App\Enums;

enum ReservationStatus: string {
    case Pending = "Pendiente";
    case Cancelled = "Cancelado";
    case Done = "Terminado";
}

