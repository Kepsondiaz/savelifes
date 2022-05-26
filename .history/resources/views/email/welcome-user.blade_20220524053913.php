@component('mail::message')
bonjour 
@component('mail::button', ['url' => '/'])
Bienvenue 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
