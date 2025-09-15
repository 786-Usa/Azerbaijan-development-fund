{{-- <x-mail::message>
We received a request to reset your password.

Click the button below to reset it:

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
# Reset Password Request

We received a request to reset your password.

Click the button below to reset it:

@component('mail::button', ['url' => $url])
Reset Password
@endcomponent

If you did not request a password reset, you can ignore this email.

Thanks,<br>
{{ config('app.name') }}
@endcomponent

