@component('mail::message')
# Hola

Un usuario ha completado el formulario de contacto,
sus datos son:

Nombre: {{ $contact }}<br>
Teléfono: {{ $phone }}<br>
Email: {{ $email }}<br>
Mensaje: {{ $message }}<br>

Saludos Cordiales,<br>
{{ config('app.name') }}
@endcomponent
