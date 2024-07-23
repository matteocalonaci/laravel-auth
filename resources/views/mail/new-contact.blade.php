<x-mail::message>
# Hai ricevuto un nuovo messaggio
Name: {{$lead['name']}}
<br>
Email: {{$lead['email']}}
<br>
Message: <br>
{{$lead['message']}}


Thanks,<br>
{{$lead['name']}}
</x-mail::message>
