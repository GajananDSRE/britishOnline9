@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20">
	<div class="title pb-20">
		<h2 class="h3 mb-0">Client List</h2>
	</div>
	<div class="row pb-10">
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20 table-responsive">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">7000005</div>
						<div class="font-14 text-secondary weight-500">Total Client</div>
					</div>
					<div class="widget-icon">
						<div class="icon" data-color="#00eccf"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">124,551</div>
						<div class="font-14 text-secondary weight-500">Total Active</div>
					</div>
					<div class="widget-icon">
						<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-user"></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">400+</div>
						<div class="font-14 text-secondary weight-500">Total Master Req</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">$50,00,00,000</div>
						<div class="font-14 text-secondary weight-500">Total Balance</div>
					</div>
					<div class="widget-icon">
						<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Simple Datatable start -->
	<div class="card-box mb-30">
		<div class="pb-20">
			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">Exchange Id</th>
						<th>User Name</th>
						<th>Bonus</th>
						<th>Types</th>
						<th>Balance</th>
						<th class="datatable-nosort">Setting</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="table-plus">Bullexch.com</td>
						<td>KAKA11</td>
						<td style="font-size: 30px;"><i class="icon-copy ion-toggle"></i></td>
						<td>Master </td>
						<td>$5050505</td>
						<td>
							<div class="dropdown">
								<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									<i class="dw dw-more"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									<a class="dropdown-item" href="./profile.html"><i class="dw dw-user1"></i>Profile</a>
									<a class="dropdown-item" href="./Password.html"><i class="dw dw-padlock1"></i> Password</a>
									<a class="dropdown-item" href="#"><i class="icon-copy fa fa-unlock" aria-hidden="true"></i>User Lock</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Simple Datatable End -->
</div>
@endsection