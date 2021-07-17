@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20">
	<div class="title pb-20">
		<h2 class="h3 mb-0">Wallet</h2>
	</div>
</div>	
<!-- Simple Datatable start -->
<div class="container pd-0">
	<div class="pd-20 card-box mb-30">
		<h4 class="h4 pb-10">Slide To Fix Wallet Transition Rate</h4>
		<div class="slidecontainer">
			<input type="range" min="1" max="1000" value="5" class="slider" id="myRange" style="width: 100%;">
			<p>Value: <span id="demo"></span> point</p>
		</div>                      
	</div>
</div>
<!-- Simple Datatable End -->

<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header"><h3>Check Transition</h3>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label>From</label>
						<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
							<optgroup data-max-options="2">
								<optgroup data-max-options="2">
									<optgroup label="Site wallet">BritishOnline9
										<option>BritishOnline9</option>
									</optgroup>
									<optgroup label=" Exchange wallet">BritishOnline9</optgroup>
									<option>Bullexch.com</option>
									<option>Betdaily.site</option>
									<option>Britishonline9.com</option>
									<option>Dafa.com</option>
									<option>Bullexch.com</option>
									<option>Betdaily.site</option>
								</optgroup>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="form-group">
						<label>To</label>
						<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
							<optgroup data-max-options="2">
								<optgroup data-max-options="2">
									<optgroup label="Site wallet">
										<option>BritishOnline9</option>
									</optgroup>
									<optgroup label=" Exchange wallet">BritishOnline9</optgroup>
									<option>Bullexch.com</option>
									<option>Betdaily.site</option>
									<option>Britishonline9.com</option>
									<option>Dafa.com</option>
									<option>Bullexch.com</option>
									<option>Betdaily.site</option>
								</optgroup>
							</optgroup>
						</select>
					</div>
				</div>				
			</div>
			<!-- Bootstrap Select Start -->
			<div class="pd-20  mb-30  table-responsive">
				<div class="clearfix mb-20">
					<div class="pull-left">
						<h4 class="text-blue h4">Wallet Transition List</h4>
					</div>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">From</th>
							<th scope="col">To</th>
							<th scope="col">Sender Name</th>
							<th scope="col">Reciver Name</th>
							<th scope="col">Points</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>bullexch</td>
							<td>bullexch</td>
							<td>Kaka11</td>
							<td>sonu</td>
							<td>500</td>
							<td>Success</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Bootstrap Select End -->
		</div>
	</div>
</div>

<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");
	output.innerHTML = slider.value;	
	slider.oninput = function() {
		output.innerHTML = this.value;
	}
</script>
@endsection
			
