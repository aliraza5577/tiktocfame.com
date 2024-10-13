@component('mail::message')
<h3>Hello {{ $user->name }},</h3>

@component('mail::button',['url' => url('verify/'.$user->remember_token)])
Verify
@endcomponent

<p>If you are facing any issue please contact us.</p>

Thanks <br />
<h3>{{ config('app.name') }}</h3>
@endcomponent