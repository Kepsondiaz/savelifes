@component('mail::message')
bonjour 
@component('mail::button', ['url' => ''])
Bienvenue {{$req}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
