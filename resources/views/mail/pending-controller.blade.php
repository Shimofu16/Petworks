@component('mail::message')
<h2 class="text-danger">APPOINTMENT CANCELED</h2>
<p class="text-center">Petworks Veterinary Clinic</p>

<p> Sorry, your Appointment Request has been pending. Kindly wait for the confirmation if yoour appointment has been approved. </p>

Thanks you and stay safe!<br>
{{ config('app.name') }}
@endcomponent
