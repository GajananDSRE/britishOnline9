<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BritishOnline9</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link rel="" sizes="180x180" href="{{ asset('images/logo.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/logo.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
  <link rel="stylesheet" href="{{asset('css/user/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/user/font-awesome.css')}}">
  <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
</head>
<body>
  @include('users.includes.header')	
  @include('users.includes.carausal')
  <div>
    @yield('content')
  </div>
  @include('users.includes.footer')
  @yield('js-script')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <!-- <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script> -->
  <!-- <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script> -->
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
