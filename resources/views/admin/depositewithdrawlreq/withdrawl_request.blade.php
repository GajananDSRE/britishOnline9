@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header w-100">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Withdraw</h4>
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
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
				<div class="pd-20 card-box height-100-p">
					<h5 class="text-center h5 mb-10">Bank</h5>
					<!-- Bootstrap Select Start -->
					<form>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Select Account(Beneficier Name)</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
										<optgroup data-max-options="2">
											<option>Bank</option>
											<option>Google-Pay</option>
											<option>Phone-Pay</option>
											<option>Cash</option>
											<option>Skrill</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>UTR/RRN/REF NO.</label>
							<input class="form-control" type="text" placeholder="ICHSDFKJD120D2D">
						</div>
						<div class="form-group">
							<label>Upload ScreenShoot/Bank Slip</label>
							<form class="dropzone" action="#" id="my-awesome-dropzone">
								<div class="fallback">
									<input type="file" name="file" />
								</div>
							</form>
						</div>
						<div class="form-group">
							<label>Admin Account No.</label>
							<input class="form-control" type="text" placeholder="47 22 20 202 00">
						</div>
						<div class="form-group">
							<label>Admin IFSC No.</label>
							<input class="form-control" type="text" placeholder="PNBF01212">
						</div>
						<div class="form-group">
							<label>Sender Name</label>
							<input class="form-control" type="text" placeholder="KAKA11">
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Amount</label>
									<input type="text" class="form-control"placeholder="$1212121">
								</div>
							</div>
						</div>
						<div class="row text-center justify-content-center">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Admin Password">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<button type="button" class="btn btn-outline-primary">Deposit Amount Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- Bootstrap Select End -->
			</div>
		</div>
	</div>
</div>
@endsection