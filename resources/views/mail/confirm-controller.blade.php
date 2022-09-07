@component('mail::message')
<h2 class="text-success">APPOINTMENT SUCCESS!</h2>

<p>Note: Please take a screenshot of this message</p>

Name: {{ $data['name'] }} <br>
Date: {{ $data['date'] }} <br>
Time: {{ $data['time'] }}<br>
Email: {{ $data['email'] }}<br>
Phone number: {{ $data['number'] }}<br>
Address: {{ $data['address'] }} <br>


Thank you and stay safe!
@endcomponent
