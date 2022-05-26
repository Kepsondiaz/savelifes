@component('mail::message')
bonjour {{$re}}
@component('mail::button', ['url' => ''])
Bienvenue
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
