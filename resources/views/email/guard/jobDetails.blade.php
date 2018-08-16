@component('mail::message')
# Got a New Job!!!

You got a new job offer  .

@component('mail::button', ['url' => URL::route('home')])
Viwe Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
