<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class ReservationCollection extends RentacarResourceCollection
{
    public $table = "reservations";
    public $orderByCols = ['created_at', 'asc'];

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
                    "text"      =>  "CREADO",
                    "value"     =>  "created_at",
                    "fixed"     =>  true,
                    "width"     =>  90,
                ],
                [
                    "text"      =>  "NOMBRE",
                    "value"     =>  "fullname",
                    "fixed"     =>  true,
                    "width"     =>  120,
                ],
                [
                    "text"      =>  "ID",
                    "value"     =>  "identification",
                    "width"     =>  100,
                ],
                [
                    "text"      =>  "TELÉFONO",
                    "value"     =>  "phone",
                    "width"     =>  110,
                ],
                [
                    "text"      =>  "EMAIL",
                    "value"     =>  "email",
                    "width"     =>  140,
                ],
                [
                    "text"      =>  "RECOGIDA",
                    "value"     =>  "pickup_date",
                    "width"     =>  90,
                ],
                [
                    "text"      =>  "CODIGO",
                    "value"     =>  "reserve_code",
                    "width"     =>  80,
                ],
                [
                    "text"      =>  "CAT.",
                    "value"     =>  "category",
                    "width"     =>  50,
                ],
                [
                    "text"      =>  "FRANQUICIA",
                    "value"     =>  "franchise",
                    "width"     =>  90,
                ],
                [
                    "text"      =>  "REFERIDO",
                    "value"     =>  "user",
                    "width"     =>  90,
                ],
                [
                    "text"      =>  "ESTADO",
                    "value"     =>  "status",
                    "width"     =>  80,
                ],
                [
                    "text"      =>  "TOTAL+TAX",
                    "value"     =>  "total_price",
                    "width"     =>  90,
                ],
                [
                    "text"      =>  "VALOR OC",
                    "value"     =>  "total_price_localiza",
                    "width"     =>  80,
                ],
                [
                    "text"      =>  "OPERACIONES",
                    "value"     =>  "operation",
                    "width"     =>  100,
                ]
            ],
            'items' =>  $this->collection
        ];
    }
}
