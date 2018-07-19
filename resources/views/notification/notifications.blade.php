@component('mail::message')
# Book Guard Conformed..

Thanks for book the **guard**.

@component('mail::button', ['url' => ''])
Contact This Guard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
