@component('mail::message')
bonjour 
@component('mail::button', ['url' => '/devenir'])
Bienvenue 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
