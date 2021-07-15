@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="title">
						<h4>Casino</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li> -->
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Fade-in effect -->
		<div class="row clearfix">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/ezugi.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/Evalu.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/we are.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/super spada.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/Qutac.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/pragmatic.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/ezugi.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="da-card">
					<div class="da-card-photo">
						<img src="{{asset ('images/Evalu.png')}}" alt="">
						<div class="da-overlay">
							<div class="da-social">
								<ul class="clearfix">
									<a href="{{ route('admin.casino-userlist') }}">
										<li><button type="button" class="btn btn-outline-danger">Check Out</button></li>
									</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection