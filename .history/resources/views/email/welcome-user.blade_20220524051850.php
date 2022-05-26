@component('mail::message')
bo
@component('mail::button', ['url' => ''])
Bienvenue
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
