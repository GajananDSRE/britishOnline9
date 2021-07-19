@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Add Slider</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('admin.poster') }}">Add Banner</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.slider') }}">Add Slider</a></li>
						</ol>
					</nav>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
					<div class="dropdown">
						<button type="button" class="btn btn-primary" href="" data-toggle="modal" data-target="#addSlider" role="button" >
								Add Slider
						</button>
					</div>
				</div>
			</div>
		</div>		
		<!-- Striped table start -->
		<div class="pd-20 card-box mb-30  table-responsive">
		<span id="result"></span>
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">Add Slider List</h4>
				</div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Image</th>
						<th scope="col">Type</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; ?>
					@foreach($sliders as $slider)
					<tr>
						<th scope="row"><?php  echo $i; ?></th>
						<td>{{$slider->title}}</td>
						<td>{{$slider->image}}</td>
						<td style="font-size: 20px;">
						<a href="javascript:;"  data-id="{{ $slider->id }}" class="btn btn-default edit-slider"><i class="fa fa-edit"></i></a>
						<a href="" data-id="{{ $slider->id }}" class="deleteSlider"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php $i++;?>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- Striped table End -->
</div>

<!-- Modal -->
<div class="modal hide fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">    
      	<!-- Modal content-->
      	<div class="modal-content">
        	<div class="modal-header">
				<h4 class="modal-title">Add Slider</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>          
        	</div>
			<div class="modal-body">          
				<!-- Bootstrap Select Start -->
				<form id="slider-upload-form" enctype="multipart/form-data" name="slider-upload-form">
				{{csrf_field()}}
					
					<!-- <div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Select Type</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
										<optgroup data-max-options="2">
											<option>Live Casino</option>
											<option>Inplay</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div> -->
					<table class="table" id="dynamic_field">
						<tr>
							<th>Image</th>
							<th>Title</th>
							<th>Sort Order</th>
						</tr>
						<tr>
							<td><input type="file" name="data[1][file]" id="imageinput" data-rule-required="true" accept="image/*"  /></td>
							<td><input type="text" name="data[1][title]" data-rule-required="true" placeholder="Title" class="form-control"/></td>
							<td><input type="text" name="data[1][sort_order]" data-rule-required="true" v-model="sort_order_increment" placeholder="Sort Order" class="form-control"/></td>
							<td>
								<i class="fa fa-plus-square" aria-hidden="true" style="font-size: 40px;" id="addRow"></i>
							</td>
						</tr>
					</table>
					<div class="row text-center mt-3" style="justify-content: center;">
						<div class="col-md-6 col-sm-12">
							<button type="button" class="btn btn-outline-primary"  name="submit" id="submit" >Submit</button>
						</div>
					</div>
				</form>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>      
	</div>
</div>

<!--edit Moadal -->
<div class="modal hide fade" id="edit-slider"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">    
      	<!-- Modal content-->
      	<div class="modal-content">
        	<div class="modal-header">
				<h4 class="modal-title">Edit Slider</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>          
        	</div>
			<div class="modal-body">          
				<!-- Bootstrap Select Start -->
				<form id="slider-edit-form" enctype="multipart/form-data" name="slider-edit-form">
					{{csrf_field()}}
					<input type="hidden" id="slider_id" name="slider_id">
					<table class="table">
						<tr>
							<th>Image</th>
							<th>Title</th>
							<th>Sort Order</th>
						</tr>
						<tr>
							<td><input type="file" name="file"  data-rule-required="true" accept="image/*"  /></td>
							<td><input type="text" name="title" id="title" data-rule-required="true" placeholder="Title" value="" class="form-control"/></td>
							<td><input type="text" name="sort_order" id="sort_order" data-rule-required="true" v-model="sort_order_increment" placeholder="Sort Order" class="form-control"/></td>
							
						</tr>
					</table>
					<div class="form-group">
						<img src="'images/slider/'" class="rounded img-responsive" id="image" width="100" height="100"> 
					</div>					
				</form>		
			</div>
			<div class="modal-footer">
				<div class="col-md-6 col-sm-12">
					<button type="button" class="btn btn-outline-primary" id="update">Update</button>
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
				</div>				
			</div>
		</div> 	   
	</div>
</div>

@endsection

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

<script>
	
$(document).ready(function() {

	var i = 2;
	$("#addRow").click(function() {
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" data-rule-required="true" name="data['+i+'][file]" id="imageinput'+ i +'" accept="image/*"/></td><td><input type="text" name="data['+i+'][title]" placeholder="Title" data-rule-required="true" class="form-control"/></td><td><input type="text" name="data['+i+'][sort_order]" data-rule-required="true" placeholder="Sort Order" value="'+i+'" class="form-control"/></td><td><button type="button" name="remove" id="'+ i +'" class="btn btn-danger btn_remove"><i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>');
		i++;
	});

	$(document).on('click', '.btn_remove', function () {
		var button_id = $(this).attr('id');
		$(this).closest('#row'+button_id+'').remove();
	});

	$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

	$('#submit').click(function(){
		  var formdata = new FormData(document.getElementById("slider-upload-form"));
		$.ajax({
            url:'{{ route("admin.create-slider") }}',
            method:'POST',
			processData: false,
            data: formdata,
            dataType:'json',
			contentType: false,
            // beforeSend:function(){
            //     $('#submit').attr('disabled','disabled');
            // },			
			success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
					setTimeout(function() {
					$('#addSlider').modal('hide');
					}, 100);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
				
            }
		});
	});

	$('.edit-slider').on("click", function(event) {
    $("#edit-slider").modal('show');
    var slider_id = $(this).data('id');
    $.ajax({
        url: "edit-slider/" + slider_id,
        type: 'GET',
        dataType: 'json',
    }).done(function(response) {
		console.log(response.slide_data.id);
		$("#slider_id").val(response.slide_data.id);
        $("#image").val(response.slide_data.image);
        $("#title").val(response.slide_data.title);
        $("#sort_order").val(response.slide_data.sort_order);
    });
});

});

$(document).ready(function() {
	$("#update").on("click", function() {
		// alert('hiii');
		var id = $("#slider_id").val();console.log(id);
		var formdata = new FormData(document.getElementById("slider-edit-form"));
		var url = "{{ route('admin.update-slider', ":id") }}";
		url = url.replace(':id', id);	
    	$.ajax({ 
		url:url,
		method: "POST",
		processData: false,
      	data: formdata,
      	dataType: 'json',
	  	contentType: false,
      	success: function (data) {
			if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
					setTimeout(function() {
					$('#edit-slider').modal('hide');
					}, 100);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
      	}
  		});
	});

	$(".deleteSlider").click(function(){
	var id = $(this).data('id');
	var url = "{{ route('admin.delete-slider') }}";

	// swal({
    //         title: "Are you sure!",
    //         type: "error",
    //         confirmButtonClass: "btn-danger",
    //         confirmButtonText: "Yes!",
    //         showCancelButton: true,
    //     },
    //     function() {
			$.ajax({
			url: url,
			type: "GET",
			// dataType: "JSON",                
			data: {id:id},
			success: function (data) {
				if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
					setTimeout(function() {
					}, 100);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }

			}         
		});
		// });
		
	});
});
	



</script>


