@component('mail::message')
bonjour 
@component('mail::button', ['url' => ''])
Bienvenue {{$re}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
