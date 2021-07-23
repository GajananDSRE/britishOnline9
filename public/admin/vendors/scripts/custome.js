//This is for change password client side validation 
$(document).ready(function() {
    $("#change-password").validate({
        rules:  {  
            current_password: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                minlength: 6
            },
            confirmPassword: {
                required: true,
                equalTo: "#password"
            }
        },
        messages:   {
            current_password: {
                required: "Current Password is required",
                minlength: "Password must be at least 6 characters"
            },
            password: {
                required: "New Password is required",
                minlength: "Password must be at least 6 characters"
            },
            confirmPassword: {
                required:  "Confirm password is required",
                equalTo: "New password and confirm password should same"
            }
        }
    });
});


$(document).ready(function(){

    //sliders js

    var i = 2;
	$("#addRow").click(function() {
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" data-rule-required="true" name="data['+i+'][file]" id="imageinput'+ i +'" accept="image/*"/></td><td><input type="text" name="data['+i+'][title]" placeholder="Title" data-rule-required="true" class="form-control"/></td><td><input type="text" name="data['+i+'][sort_order]" data-rule-required="true" placeholder="Sort Order" value="'+i+'" class="form-control"/></td><td><button type="button" name="remove" id="'+ i +'" class="btn btn-danger btn_remove"><i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>');
		i++;
	});

	$(document).on('click', '.btn_remove', function () {
		var button_id = $(this).attr('id');
		$(this).closest('#row'+button_id+'').remove();
	});
	

    $('#slider-add-form').on('submit', function(event){
    	event.preventDefault();
        $('#slider-add-form').validate();
			if($('#slider-add-form').valid()){
		var formdata = new FormData(document.getElementById("slider-add-form"));
		$.ajax({
            url : config.routes.addSlider,
            method:'POST',
			processData: false,
            data: formdata,
            dataType:'json',
			contentType: false,
			success:function(data)
            {
                console.log(data);
                if(data.errorStatus)
                {
                    toastr.error(data.message);
                }
                else
                {
					setTimeout(function() {
					$('#addSlider').modal('hide');
					}, 100);
                    toastr.success(data.message);
                    // $('#result').html('<div class="alert alert-success">'+data.message+'</div>').fadeIn('slow');
                	// $('#result').delay(5000).fadeOut('slow');
                    document.getElementById("slider-add-form").reset();
                }				
            }
		});
    }
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

    //update slider

    $('#slider-edit-form').on('submit', function(event){
    	event.preventDefault();
        // $('#slider-edit-form').validate();
        // if($('#slider-edit-form').valid()){
        var formdata = new FormData(document.getElementById("slider-edit-form"));
        $.ajax({ 
            url : config.routes.updateSlider,
            method: "POST",
            processData: false,
            data: formdata,
            dataType: 'json',
            contentType: false,
            success: function (data) {
                if(data.errorStatus)
                {
                    toastr.error(data.message);
                }
                else
                {
                    $('#post-data-list').append(data.sliderdata);
                    toastr.success(data.message);
                    // setTimeout(function() {
                    // $('#edit-slider').modal('hide');
                    // }, 100);
                    // $('#result').html('<div class="alert alert-success">'+data.message+'</div>').fadeIn('slow');
                    // $('#result').delay(5000).fadeOut('slow');
                    document.getElementById("slider-edit-form").reset();
                }
            }
        });
    // }
	});

    $('#addSlider').on('hidden.bs.modal', function (e) {
        $(this)         
        .find("input[type=file], input[type=text]")
        .val('')
        .end();
    })    
       
    $("#edit-slider").on("hidden.bs.modal", function() {
        $("#editErr").html("");
        $(this)         
        .find("input[type=file]")
        .val('')
        .end();
    });

    //logo-setting
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Site Setting js
    $('#logo-form').on('submit', function(event){
    event.preventDefault();
    var html = "Please select Logo (image of type: jpeg, jpg, png)"
    var formData = new FormData();
    var user_id= $('#user_id').val();
    if($('#logo-img').val() == ''){ 
        toastr.error(html);
        // $('#message').html('<div class="alert alert-danger">'+html+'</div>'); 
        // $('#message').delay(5000).fadeOut('slow');     
        formData.append('user_id', user_id);
    }else{
        formData.append('logo_file', $('#logo-img')[0].files[0]);
        formData.append('user_id', user_id);
        $.ajax({
            url : config.routes.logosetting,
            method:"POST",
            data:formData,
            dataType:'json',
            contentType: false,
            processData: false,
            success:function(data)
            {
                if(data.errorStatus)
                {
                    toastr.error(data.message);
                    // $('#message').html('<div class="alert alert-danger">'+data.message+'</div>').fadeIn('slow');
                    // $('#message').delay(5000).fadeOut('slow');
                }
                else
                {
                    toastr.success(data.message);
                    // $('#message').html('<div class="alert alert-success">'+data.message+'</div>').fadeIn('slow');
                    // $('#message').delay(5000).fadeOut('slow');
                    // $('#logo-img').append(data.logo);
                    document.getElementById("logo-form").reset();
                }
            }
         })
    }
    
    });
});
 