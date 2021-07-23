@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Logo</h4>
                    </div>
                </div>
            </div>
        </div>	
        <!-- Striped table start -->
        <div class="pd-20 card-box mb-30  table-responsive">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h4 class="text-blue h4">Logo Detail</h4>
                </div>
            </div>
			<span id="message"></span>
			{{ Form::open(array('id'=>'logo-form','class'=>'form2', 'enctype'=>'multipart/form-data')) }}
				{{ Form::hidden('user_id', Auth::User()->id, array('id' => 'user_id')) }}
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Site Logo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								{{ Form::file('logo_file',['class'=> 'form-control', 'accept' => 'image/*','id'=>'logo-img'])}}
							</td>
							<td>
								<div class="form-group">
								@foreach($sites_settings as $sites_setting)						
									<img src="{{ asset('/'. $sites_setting->slug . '/' . $sites_setting->logo) }}" alt="{{$sites_setting->title}}" width="100" class="img-responsive">
								@endforeach
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row text-center mt-3" style="justify-content: center;">
					<div class="col-md-6 col-sm-12">
						{{ Form::submit('Update Logo',['class' => 'btn btn-outline-primary'])}}
					</div>
				</div>
			{{ Form::close() }}
        </div>
        <!-- Striped table End -->        
    </div>
</div>

@endsection

<script>
    // global app configuration object
    var config = {
        routes: {
            logosetting: "{{ route('admin.logo-update') }}"
        }
    };
</script>

