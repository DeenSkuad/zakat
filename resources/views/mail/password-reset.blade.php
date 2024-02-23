# Password Change Request

<x-mail::button :url="url('auth/new-password', $token, false)">
Change Password
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
