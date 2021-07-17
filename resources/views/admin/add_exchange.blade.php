@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="title">
						<h4>Create Exchange</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('admin.add-exchange') }}">Setting</a></li>
							<li class="breadcrumb-item active" aria-current="page">Create Exchange</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
				<div class="pd-20 card-box height-100-p">
					<h5 class="text-center h5 mb-10">Create Exchange</h5>
					<!-- Bootstrap Select Start -->
					<form>
						<div class="form-group">
							<label>Exchange Name</label>
							<input class="form-control" type="text" placeholder="Johnny Brown">
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Demo Id</label>
									<input type="text" class="form-control"placeholder="kaka11">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Demo Password</label>
									<input type="text" class="form-control" placeholder="abc123">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group table-responsive">
								<label class="time-label pl-4">Select Game
								<div ></label>
									<ul class="d-flex ml-4">
										<li class="p-4">
											<input type="radio" id="f-option" name="selector">
											<label for="f-option">Cricket</label>											
											<div class="check"></div>
										</li>										
										<li class="p-4">
											<input type="radio" id="s-option" name="selector">
											<label for="s-option">Football</label>											
											<div class="check"><div class="inside"></div></div>
										</li>										
										<li class="p-4">
											<input type="radio" id="t-option" name="selector">
											<label for="t-option">Tennis</label>											
											<div class="check"><div class="inside"></div></div>
										</li>
										<li class="p-4">
											<input type="radio" id="f-option" name="selector">
											<label for="f-option">Casino</label>											
											<div class="check"></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Balance</label>
							<input class="form-control" type="text" placeholder="$20000">
						</div>
						<div class="row text-center" style="justify-content: center;">
							<div class="col-md-6 col-sm-12">
								<button type="button" class="btn btn-outline-primary">Add Exchange</button>
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