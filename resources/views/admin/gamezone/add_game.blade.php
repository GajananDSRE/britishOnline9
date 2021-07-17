@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6 col-sm-12 ">
				<h3>Add Game</h3>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
			<div class="pd-20 card-box height-100-p">
				<h5 class="text-center h5 mb-10">Add Game</h5>
				<!-- Bootstrap Select Start -->
				<form>
					<div class="row"></div>
					<div class="form-group">
						<label>Write Game Name</label>
						<input class="form-control" type="text" placeholder="Ex. Horse Racing">
					</div>
					<div class="row text-center justify-content-center">
						<div class="col-md-6 col-sm-12">
							<button type="button" class="btn btn-outline-primary">Add Game</button>
						</div>
					</div>
				</form>
			</div>
			<!-- Bootstrap Select End -->
		</div>
	</div>	
</div>
@endsection