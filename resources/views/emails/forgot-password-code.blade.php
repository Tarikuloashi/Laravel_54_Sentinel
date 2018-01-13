<h1>Hello Application user</h1>

<p> 
	please flow the link and <strong>Reset</strong> your <strong>Password.</strong>

	<a href="{{ env('APP_URL')}}/reset/{{ $user->email}}/{{$code}}">Activate Account</a>
</p>