# Password Change Request

Hello,

We received a request to change your password. If you initiated this request, please use the button below to proceed with the password change. If you did not request this change, you can safely ignore this email.

<x-mail::button :url="url('password/reset', $token, false)">
Change Password
</x-mail::button>

If you're having trouble clicking the "Change Password" button, copy and paste the following URL into your web browser:

{{ url('password/reset', $token, false) }}

If you did not request a password change, no further action is required.

Thanks,<br>
{{ config('app.name') }}
