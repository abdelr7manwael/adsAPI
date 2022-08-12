@component('mail::message')
# Remainder Mail
Hi, {{$user->name}}<br>
Your Ad will Be live Tomorrow.

@component('mail::button', ['url' => "http://127.0.0.1:8000/api/ad/$ad->id"])
Show Ad
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
