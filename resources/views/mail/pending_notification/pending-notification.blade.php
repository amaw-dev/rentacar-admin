<x-mail::message>

Cordial saludo, Señores Localiza

Contamos con una solicitud de reserva enviada recientemente, con código **{{ $reserva->reserve_code }}**  en estado pendiente.

@if ($reserva->total_insurance)
    El cliente requiere seguro total
@endif

@if ($reserva->monthly_mileage)
El cliente ha seleccionado el kilometraje: {{ $reserva->monthly_mileage }}
@endif

@if ($reserva->extra_driver || $reserva->baby_seat || $reserva->wash)
El cliente requiere los servicios de:
@endif

@if ($reserva->extra_driver)
* Conductor adicional
@endif

@if ($reserva->baby_seat)
* Silla para bebé
@endif

@if ($reserva->wash)
* Lavado de vehículo
@endif

Agradecemos su pronta respuesta a la solicitud.

</x-mail::message>
