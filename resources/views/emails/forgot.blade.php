@component('mail::message')
<h3>Hello {{ $user->name }},</h3>

@component('mail::button',['url' => url('reset/'.$user->remember_token)])
Reset Your Password
@endcomponent

<p>If you are facing any issue while recovering your password please contact us.</p>

Thanks <br />
<h3>{{ config('app.name') }}</h3>
@endcomponent