@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header"><h3>Casino</h3>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label>Select game</label>
						<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
							<optgroup data-max-options="2">
								<option>Q-tech</option>
								<option>Ezugi</option>
								<option>Evalution</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- Striped table start -->
		<div class="pd-20 card-box mb-30 table-responsive">
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">Request Exchange</h4>
				</div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Casino Name</th>
						<th scope="col">Total Bets</th>
						<th scope="col">Date & Time</th>
						<th scope="col">Balance</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Dragon & Tiger</td>
						<td>500</td>
						<td>12 July / 11:00 AM</td>
						<td>45000</td>
						<td>
							<a class="btn btn-primary " href="#" role="button" >
								Check Out
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- Striped table End -->
		<!-- Striped table start -->
		<div class="pd-20 card-box mb-30 table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">User Id</th>
						<th scope="col">User Name</th>
						<th scope="col">Total Bets</th>
						<th scope="col">Date & Time</th>
						<th scope="col">Balance</th>
						<th scope="col">Loss & Profit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Kaka11</td>
						<td>Sonu</td>
						<td>45</td>
						<td>11 Jul / 11:00 AM</td>
						<td>$505055</td>
						<td>-$300</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- Striped table End -->
	</div>
</div>
@endsection