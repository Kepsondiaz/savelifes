@component('mail::message')
bonjour 
@component('mail::button', ['url' => '/deve'])
Bienvenue 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
