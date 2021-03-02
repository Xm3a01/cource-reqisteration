@component('mail::message')
# New message

{{$contact['message']}}

@component('mail::panel')
{{$contact['email']}}
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
