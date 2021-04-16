@component('mail::message')
# {{$contact['name']}}

{{$contact['message']}}

@component('mail::panel')
This Email From : {{$contact['email']}}
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
