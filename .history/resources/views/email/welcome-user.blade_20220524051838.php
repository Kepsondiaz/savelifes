@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Bienven
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
