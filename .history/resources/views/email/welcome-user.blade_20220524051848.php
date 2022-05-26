@component('mail::message')

@component('mail::button', ['url' => ''])
Bienvenue
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
