@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header"><h3>Downline</h3>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<label>Select Type</label>
						<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
							<optgroup data-max-options="2">
								<option>All</option>
								<option>Withdraw</option>
								<option>Deposit</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<label>Status</label>
						<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
							<optgroup data-max-options="2">
								<option>All</option>
								<option>Accepted</option>
								<option>Pending</option>
								<option>Rejected</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<label>Days</label>
						<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
							<optgroup data-max-options="2">
								<option>Today</option>
								<option>Yesterday</option>
								<option>Last 7 Days</option>
								<option>Last 30 Days</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap Select Start -->
		<div class="pd-20 card-box mb-30 table-responsive">
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">Downline Request List</h4>
				</div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Action</th>
						<th scope="col">User Id</th>
						<th scope="col">Account No.</th>
						<th scope="col">IFSC Code</th>
						<th scope="col">Amount</th>
						<th scope="col">UTR/RRN/REF No.</th>
						<th scope="col">Sender Name</th>
						<th scope="col">Reciver Name</th>
						<th scope="col">Status</th>
						<th scope="col">Date</th>
						<th scope="col">View</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"></th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<th ></th>
						<th ></th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td style="font-size: 20px;">
							<i class="fa fa-lapto" aria-hidden="true"></i>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- Bootstrap Select End -->
	</div>
</div>
@endsection