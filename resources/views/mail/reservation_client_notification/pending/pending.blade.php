@component('mail::message')
Estimado/a {{ $fullname }},

Le informamos que su solicitud de reserva está en proceso. Estaremos verificando, y le
proporcionaremos una respuesta tan pronto como sea posible.

Apreciamos su paciencia y confianza en nuestros servicios.

Atentamente,

@yield('franchise')
Travel: Amaw SAS \
Código: 07334927
@endcomponent
