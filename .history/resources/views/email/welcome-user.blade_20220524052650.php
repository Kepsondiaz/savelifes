@component('mail::message')
bonjour 
@component('mail::button', ['url' => ''])
Bienvenue {{$request->}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
