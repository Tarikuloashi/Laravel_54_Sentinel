<h1>Hello Application user</h1>

<p> 
	please flow the link and activate your account

	<a href="{{ env('APP_URL')}}/activate/{{ $user->email}}/{{$code}}">Activate Account</a>
</p>