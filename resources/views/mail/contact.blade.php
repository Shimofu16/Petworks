@component('mail::message')
    <h2 class="text-success">MESSAGE</h2>
    <p> Petworks Veterinary Clinic</p>

    {{ $data['message'] }}

    Thanks you and stay safe!<br>
    {{ config('app.name') }}
@endcomponent
