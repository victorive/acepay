@component('mail::message')
# Hello {{ $user->firstname }},

You just changed your password for {{ config('app.name') }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent

