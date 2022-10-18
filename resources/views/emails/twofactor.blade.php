@component('mail::message')
# Hello {{ $user->firstname }},

Here is your two-factor authentication code for {{ config('app.name') }}. Kindly ensure that you don't share your code with anyone.

@component('mail::panel')
{{ $user->token }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

