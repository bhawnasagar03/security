@component('mail::message')
# Your job has been canceled by User

Dear Guard now you will get a new job soon 
Have a nice day.

@component('mail::button', ['url' => URL::route('customerLogin')])
View Cancelation
@endcomponent


Thanks$Regards<br>
{{ config('app.name') }}
@endcomponent
