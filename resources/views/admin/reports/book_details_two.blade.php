@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12 ">
					<h3>Report / Book Details 2</h3>
					<label class="mt-3">From</label>
					<input type="date" id="myDate" value="2014-02-09">
					<label>To</label>
					<input type="date" id="myDate" value="2014-02-09">
					<button type="button" class="btn btn-primary">Search</button>
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
			<div class="col-lg-3">
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
								<th scope="col">Profit & Loss Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="row"><a href="">Real Worli</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Tennis</a></td>
								<td>12222</td>
							</tr>
							<tr>
								<td scope="row"><a href="">Cricket</a></td>
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
			<div class="col-lg-3">
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
							<tr style="background-color: green;color: white">
								<td scope="row">Total</td>
								<td>12222</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-lg-3">
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
							<tr style="background-color: red;color: white">
								<td scope="row">Total</td>
								<td>12222</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="pd-20 card-box mb-30 table-responsive">
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">Final List</h4>
				</div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Runner</th>
						<th scope="col">Price</th>
						<th scope="col">Size</th>
						<th scope="col">Side</th>
						<th scope="col">P & L</th>
						<th scope="col">Places at</th>
						<th scope="col">Settled at</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>ABC</td>
						<td>1.4</td>
						<td>1000</td>
						<td>B</td>
						<td>1000</td>
						<td>11 Jun / 11:00 AM</td>
						<td>11 Jun / 11:00 AM</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td>ABC</td>
						<td>1.4</td>
						<td>1000</td>
						<td>B</td>
						<td>1000</td>
						<td>11 Jun / 11:00 AM</td>
						<td>11 Jun / 11:00 AM</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td>ABC</td>
						<td>1.4</td>
						<td>1000</td>
						<td>B</td>
						<td>1000</td>
						<td>11 Jun / 11:00 AM</td>
						<td>11 Jun / 11:00 AM</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td>ABC</td>
						<td>1.4</td>
						<td>1000</td>
						<td>B</td>
						<td>1000</td>
						<td>11 Jun / 11:00 AM</td>
						<td>11 Jun / 11:00 AM</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td>ABC</td>
						<td>1.4</td>
						<td>1000</td>
						<td>B</td>
						<td>1000</td>
						<td>11 Jun / 11:00 AM</td>
						<td>11 Jun / 11:00 AM</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- Striped table End -->		
	</div>
</div>
@endsection