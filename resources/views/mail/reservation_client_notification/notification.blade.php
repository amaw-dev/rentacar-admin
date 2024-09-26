@component('mail::message')

Estimado/a {{ $reserva->fullname }},

<h1>Su reserva ha sido <strong>{{ $reserva->formatted_client_reservation_status }}</strong></h1>

El código asociado a la reserva es: <b>{{ $reserva->reserve_code }}</b>

Adjuntamos copia de su solicitud:

---
<br/>

Nombre: **{{ $reserva->fullname }}** <br/>
{{ $reserva->identification_type }}: **{{ $reserva->identification }}** <br/>
Teléfono: **{{ $reserva->phone }}** <br/>
Email: **{{ $reserva->email }}** <br/>

<br/>

**{{ $reserva->formatted_category }}** <br/>
Recogida: {{ $reserva->formatted_pickup_place }} <br/>
Fecha: {{ $reserva->formatted_pickup_date }} {{ $reserva->formatted_pickup_hour }} <br/>
Retorno: {{ $reserva->formatted_return_place }} <br/>
Fecha: {{ $reserva->formatted_return_date }} {{ $reserva->formatted_return_hour }} <br/>

@if ($reserva->total_insurance)
Ha solicitado seguro total
@endif

@if ($reserva->monthly_mileage)
Ha seleccionado el kilometraje: {{ $reserva->monthly_mileage }}
@endif

---
<br/>

Apreciamos su paciencia y confianza en nuestros servicios.

Atentamente,

@yield('franchise')
Travel: Amaw SAS <br/>
Código: 07334927 <br/>
@endcomponent
