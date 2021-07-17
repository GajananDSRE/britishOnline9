@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Add Banner</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('admin.poster') }}">Add Banner</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.slider') }}">Add Slider</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
					<div class="dropdown">
						<button type="button" class="btn btn-primary" href="" data-toggle="modal" data-target="#addBanner" role="button" >
								Add Banner
						</button>
					</div>
				</div>
            </div>
        </div>	
        <!-- Striped table start -->
        <div class="pd-20 card-box mb-30  table-responsive">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h4 class="text-blue h4">Add Banner List</h4>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sports Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cricket</td>
                        <td style="font-size: 20px;">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Soccer</td>
                        <td style="font-size: 20px;">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tennis</td>
                        <td style="font-size: 20px;">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Striped table End -->        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addBanner" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">    
      	<!-- Modal content-->
      	<div class="modal-content">
        	<div class="modal-header">
			<h4 class="modal-title">Add Banner</h4>
          	<button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <div class="modal-body">          
			<!-- Bootstrap Select Start -->
			<form>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Select Sports Name</label>
                            <select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
                                <optgroup data-max-options="2">
                                    <option>Cricket</option>
                                    <option>Football</option>
                                    <option>Tennis</option>
                                    <option>Casino</option>
                                    <option>Live Casino</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <form class="dropzone" action="#" id="my-awesome-dropzone">
                    <div class="fallback">
                        <input type="file" name="file" />Select Poster
                    </div>
                </form>
                <form class="dropzone mt-5" action="#" id="my-awesome-dropzone">
                    <div class="fallback">
                        <input type="file" name="file" />Select Icon
                    </div>
                </form>
                <div class="row text-center mt-5" style="justify-content: center;">
                    <div class="col-md-6 col-sm-12">
                        <button type="button" class="btn btn-outline-primary">Update Poster</button>
                    </div>
                </div>
            </form>	
        </div>
        <div class="modal-footer">
          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
	</div>      
</div>
@endsection
