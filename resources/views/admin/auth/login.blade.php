<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Britishonline9</title>
	<link rel="" sizes="180x180" href="{{ asset('admin/src/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/images/logo.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/logo.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/style.css')}}">
</head>
<body class="login-page">
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{ asset('admin/vendors/images/login-page-img.png') }}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<a href="login.html">
							<img src="{{ asset('admin/vendors/images/logo.png') }}" alt="" style="padding: 0px 0px 20px 140px ;">
						</a>
						<div class="login-title">
							<h2 class="text-center text-primary">Login For Admin</h2>
						</div>
						<form>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
  	<script src="{{asset('admin/vendors/scripts/script.min.js')}}"></script>
</body>
</html>