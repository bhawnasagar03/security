@component('mail::message')
# Book Guard Conformed..

Thanks for book the **guard**.

@component('mail::button', ['url' => URL::route('customerLogin')])
Contact This Guard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
