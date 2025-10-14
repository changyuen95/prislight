@component('mail::message')
Hello, Customer has contact us through website. <br><br>
Name : {{ $details['name'] }}<br>
Email : {{ $details['email'] }}<br>
Subject : {{ $details['subject'] }}<br>
message : {!! $details['message'] !!}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent