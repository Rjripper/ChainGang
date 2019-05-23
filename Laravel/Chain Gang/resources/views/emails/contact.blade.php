@component('mail::message')

# Contact <br>

Naam: {{$data['name']}} <br>
Email: {{$data['email']}} <br>
Bericht: {{$data['message']}}

{{ config('app.name') }}
@endcomponent
