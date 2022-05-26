@component('mail::message')
bonjour 
@component('mail::button', ['url' => ''])
Bienvenue {{$request->name}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
