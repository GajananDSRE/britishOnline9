<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
  <link rel="stylesheet" href="{{asset('css/user/bootstrap.min.css')}}">
  <title>BritishOnline9</title>
</head>
<body class="log">
	<div class="login-wrapper">
		{{ Form::open(array('url'=>'login','autocomplete'=>'off','id'=>'signIn','class'=>'form2')) }}
			<img src="{{ asset('images/logo.png') }}" alt="">
			<h2>Login</h2>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				@if(Session::has("success"))
					<div class="alert alert-success">
						{{Session::get("success")}}
					</div>
				@elseif(Session::has("failed"))
					{{Session::get("failed")}}
				@endif
			<div class="input-group">
			{{ Form::text('userid','',['placeholder'=>'User Name']) }} 
			</div>
			<div class="input-group">
			{{ Form::password('password',['placeholder'=>'password'])}}
			</div>
			{{ Form::submit('Login',['class' => 'submit-btn'])}}
			<a href="{{'/register'}}" class="forgot-pw"><span class="login-btn" style="text-align: center;margin-top: 5px;">Sign Up</span></a>
		{{ Form::close() }}
	</div>
	<script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/jquery.validate.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$("#signIn").validate(
				{
					rules:     	{
									userid: {
											required: true,
											maxlength: 20
										},
									password: {
											required: "Username is required",
											maxlength: "First name cannot be more than 20 characters",
										},
								},
					messages:   {
									userid: {
											required: "Username is required",
											minlength: "Username must be at least 4 number",
									},
									password: {
											required: "Password number is required",
											minlength: "Password number must be of 6 digits",
									}
								}
				});     
			});
	</script>
</body>
</html>