@component('mail::message')
<h2 class="text-success text-center">Appointment Reminder </h2>

<p>Good Day  {{ $data['name'] }}. This is Petworks Veterinary Clinic, please be reminded of your schedule today {{ date('F d, Y',strtotime($data['date'])) }} for follow up check up for {{ $data['pet_name'] }}. </p>

Thank you and stay safe!
@endcomponent
