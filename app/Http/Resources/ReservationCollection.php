<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ReservationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'headers'   => [
                [
                    "text"      =>  "NOMBRE",
                    "value"     =>  "fullname",
                    "fixed"     =>  true,
                ],
                [
                    "text"      =>  "ID",
                    "value"     =>  "identification",
                ],
                [
                    "text"      =>  "TELÉFONO",
                    "value"     =>  "phone",
                ],
                [
                    "text"      =>  "EMAIL",
                    "value"     =>  "email",
                ],
                [
                    "text"      =>  "CATEGORÍA",
                    "value"     =>  "category",
                ],
                [
                    "text"      =>  "FRANQUICIA",
                    "value"     =>  "franchise",
                ],
                [
                    "text"      =>  "CÓDIGO RESERVA",
                    "value"     =>  "reserve_code",
                ],
                [
                    "text"  =>  "OPERACIONES",
                    "value" =>  "operation"
                ]
            ],
            'items' =>  $this->collection
        ];
    }
}
