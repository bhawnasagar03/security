@component('mail::message')
# You Cancel this guard

Dear User you recently cancel your guard booking.

@component('mail::button', ['url' => URL::route('home')])
View Cancelation
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
