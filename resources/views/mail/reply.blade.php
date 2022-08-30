@component('mail::message')
<h2 class="text-success">MESSAGE</h2>
<p> Petworks veterinary Clinic</p>

{{ $details['body'] }}

Thanks you and stay safe!<br>
{{ config('app.name') }}
@endcomponent
