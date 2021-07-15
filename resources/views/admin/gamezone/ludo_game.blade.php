@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header w-100">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Ludo</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- Fade-in effect -->
		<div class="pd-20 card-box mb-30 table-responsive">
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">Ludo Player List</h4>
				</div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">User Name</th>
						<th scope="col">Winner Name</th>
						<th scope="col">Bet Amount</th>
						<th scope="col">Status</th>
						<th scope="col">Date & Time</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Milan</td>
						<td>Kaka</td>
						<td>1100</td>
						<td>Loss</td>
						<td>11-Jul,11:00 AM</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="fa fa-ban"></i>Bet Close </a>
									<a class="dropdown-item" href="./Password.html"><i class="fa fa-minus"></i>Hide Market</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection