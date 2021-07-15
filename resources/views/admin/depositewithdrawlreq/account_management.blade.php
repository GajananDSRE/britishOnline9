@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header w-100">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Your Account</h4>
					</div>
					<nav aria-label="" role="navigation">
						<ol class="d-flex">
							<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
								<div class="daa-card">
									<div class="daa-card-photo">
										<img src="{{asset ('images/bank.png')}}" alt="">
										<a href="">
											<div class="daa-overlay daa-social">
												Bank
											</div>
										</a>
									</div>
								</div>
							</div>  
							<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
								<div class="daa-card">
									<div class="daa-card-photo">
										<img src="{{asset ('images/g-pay.png')}}" alt="">
										<a href="">
											<div class="daa-overlay daa-social">
												G-Pay
											</div>
										</a>
									</div>
								</div>
							</div>  
							<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
								<div class="daa-card">
									<div class="daa-card-photo">
										<img src="{{asset ('images/phone-pay.png')}}" alt="">
										<a href="">
											<div class="daa-overlay daa-social">
												P-Pay
											</div>
										</a>
									</div>
								</div>
							</div>  
							<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
								<div class="daa-card">
									<div class="daa-card-photo">
										<img src="{{asset ('images/skrill.png')}}" alt="">
										<a href="">
											<div class="daa-overlay daa-social">
												Cash
											</div>
										</a>
									</div>
								</div>
							</div>  
						</ol>
					</nav>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
					<div class="dropdown">
						<a class="btn btn-secondary " href="#" role="button" data-toggle="dropdown">
							Add Account
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Fade-in effect -->
		<div class="pd-20 card-box mb-30 table-responsive">
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">We have Exchange Id</h4>
				</div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Exchange</th>
						<th scope="col">Total Id</th>
						<th scope="col">Balance</th>
						<th scope="col">Total Active</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Bullexch.com</td>
						<td>500</td>
						<td>45000</td>
						<td>450</td>
						<td style="font-size: 20px;">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Betfair.com</td>
						<td>400</td>
						<td>350000</td>
						<td>350</td>
						<td style="font-size: 20px;">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Dafa.com</td>
						<td>300</td>
						<td>250000</td>
						<td>250</td>
						<td style="font-size: 20px;">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Betdaily.site</td>
						<td>200</td>
						<td>15000</td>
						<td>150</td>
						<td style="font-size: 20px;">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Britishonline9</td>
						<td>100</td>
						<td>50000</td>
						<td>50</td>
						<td style="font-size: 20px;">
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection