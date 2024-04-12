<?php

namespace App\Enums;

enum IdentificationType: string {
    case Cedula = "Cedula Ciudadania";
    case CedulaExtranjeria = "Cedula Extranjeria";
    case Pasaporte = "Pasaporte";
}

