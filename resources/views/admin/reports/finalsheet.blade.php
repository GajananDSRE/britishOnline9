@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12 ">
					<h3>Report / Final Sheet</h3>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
					<div class="dropdown">
						<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
							select sheet
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="{{route('admin.book-details-one')}}">Book Details</a>
							<a class="dropdown-item" href="{{route('admin.book-details-two')}}">Book Details 2</a>
							<a class="dropdown-item" href="{{route('admin.daily-pl')}}">Daily P & L</a>
							<a class="dropdown-item" href="{{route('admin.finalsheet')}}">Final Sheet</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Striped table start -->
		<div class="row">
			<div class="col-lg-5">
				<div class="pd-20 card-box mb-30 row">
					<div class="clearfix mb-20 col-lg-6">
						<div class="pull-left">
							<h6 class="text-blue">Director</h6>
						</div>
					</div>
					<div class="clearfix mb-20 col-lg-6">
						<div class="">
							<h6 class="text-blue">Hide Zero<i class="fa fa-toggle-on" aria-hidden="true" style="margin-left: 10px;font-size: 20px;"></i>
							</h6>
						</div>
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Name</th>
								<th scope="col">Profit Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Kakak11</a></td>
								<td>12222</td>
							</tr>
							<tr style="background-color: green;color: white">
								<td scope="row">Total</td>
								<td>12222</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-lg-2"></div>
				<div class="col-lg-5">
					<div class="pd-20 card-box mb-30 row">
						<div class="clearfix mb-20 col-lg-6">
							<div class="pull-left">
								<h6 class="text-blue">Director</h6>
							</div>
						</div>
						<div class="clearfix mb-20 col-lg-6">
							<div class="">
								<h6 class="text-blue">Hide Zero<i class="fa fa-toggle-on" aria-hidden="true" style="margin-left: 10px;font-size: 20px;"></i></h6>
							</div>
						</div> 
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Name</th>
									<th scope="col">Loss Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row"><a href="">Kakak11</a></td>
									<td>12222</td>
								</tr>
								<tr style="background-color: red;color: white">
									<td scope="row">Total</td>
									<td>12222</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Striped table End -->
		</div>
	</div>
</div>
@endsection