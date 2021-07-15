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
	{{ Form::open(array('url' => 'register','autocomplete'=>'off','id'=>'signUp','class'=>'form2')) }}
		<img src="{{ asset('images/logo.png') }}" id="d" alt="">
		<h2>Signup</h2>
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
		  {{ Form::text('name','',['placeholder'=>'Name']) }}
		</div>
		<div class="input-group">
		  {{ Form::text('userid','',['placeholder'=>'User Name']) }}
		</div>
		<div class="input-group">
		   {{ Form::text('contact','',['placeholder'=>'Contact No.']) }}
		</div>
		<div class="input-group">
		  {{ Form::text('whatsapp_no','',['placeholder'=>'Whatsapp No. *']) }}
		</div>
		<div class="input-group">
		  {{ Form::password('password',['placeholder'=>'Password']) }}
		</div>
		<div class="input-group">
		  {{ Form::password('confirmPassword',['placeholder'=>'Conform Password']) }}
		</div>
		{{ Form::submit('Signup',['class' => 'submit-btn'])}}
		<a href="{{'/login'}}" class="forgot-pw"><span class="login-btn" style="text-align: center;margin-top: 5px;">Login</span></a>
	{{ Form::close() }}
  </div>
  <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script>
		$(document).ready(function() {
			$("#signUp").validate({
				rules:      {
								name: {
									required: true,
									maxlength: 20
								},
								userid: {
									required: true,
									maxlength: 20
								},
								contact: {
									required: true,
									minlength: 10
								},
								 whatsapp_no: {
									required: true,
									minlength: 10
								},
								password: {
									required: true,
									minlength: 5
								},
								// confirmPassword: {
								// 	required: true,
								// 	equalTo: "#password"
								// }
							},
				messages:   {
								name: {
									required: "Name is required",
									maxlength: "First name cannot be more than 20 characters",
								},
								userid: {
									required: "Username is required",
									maxlength: "First name cannot be more than 20 characters",
								},
								contact: {
									required: "Contact is required",
									minlength: "Contact must be at least 10 number",
								},
								whatsapp_no: {
									required: "whatsapp number is required",
									minlength: "whatsapp number must be at least 10 number",
								},
								password: {
									required: "Password is required",
									minlength: "Password must be at least 5 characters"
								},
								// confirmPassword: {
								// 	required:  "Confirm password is required",
								// 	equalTo: "Password and confirm password should same"
								// }
							}
			});
		});
  </script> 
</body>
</html>