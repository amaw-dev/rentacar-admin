<x-mail::message>

Cordial saludo, Señores Localiza

Contamos con una solicitud de reserva enviada recientemente, con código **{{ $reserve_code }}**.

@if ($total_insurance)
    El cliente requiere seguro total
@endif

Agradecemos su pronta respuesta a la solicitud.

</x-mail::message>
