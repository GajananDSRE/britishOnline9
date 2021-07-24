@extends('admin.layouts.master')
@section('content')
<?php  $exchange_sport  = explode(',', $up_exchange_data->sport); ?> 
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
							<li class="breadcrumb-item active" aria-current="page">Edit Exchange</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
				<div class="pd-20 card-box height-100-p">
					<h5 class="text-center h5 mb-10">Edit Exchange</h5>
					{{ Form::open(array('url' => ['update-exchange'],'autocomplete'=>'off','id'=>'update-exchange','enctype'=>'multipart/form-data')) }}
							{{ Form::hidden('id',$up_exchange_data->id) }}
						<div class="form-group">
							{{ Form::label('Exchange Name', 'Exchange Name') }}
							{{ Form::text('name',$up_exchange_data->name,['class'=> 'form-control','placeholder'=>'BritishOnline9.com'])}}
						</div>
						<div class="form-group">
							{{ Form::label('url', 'URL') }}
							{{ Form::text('url',$up_exchange_data->url,['class'=> 'form-control','placeholder'=>'Exchange URL'])}}
						</div>
						<div class="form-group">
							{{ Form::label('Exchange logo', 'Exchange logo') }}
							{{ Form::file('logo',['class'=> 'form-control'])}}
							<img style="width: 134px;margin-top: 15px;" src="{{ asset('/images/exchange_img').'/'.$up_exchange_data->logo }}">
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									{{ Form::label('Demo Id', 'Demo Id') }}
									{{Form::text('demo_id',$up_exchange_data->demo_id,['class'=>'form-control','placeholder'=>'kaka11'])}}
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									{{ Form::label('Demo Password', 'Demo Password') }}
									{{ Form::password('password',['class'=> 'form-control','placeholder'=>'abc123'])}}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group table-responsive">
								{{ Form::label('Select Game', 'Select Game',['class'=>'time-label pl-4']) }}
									<ul class="d-flex ml-4">
										<li class="p-4">
											{{ Form::checkbox('sport[]', 'cricket',in_array('cricket',$exchange_sport) ? 'checked' : '' ,['id'=>'cricket']) }}
											{{ Form::label('cricket', 'Cricket', ['class'=>'check']) }}									
											<div class="check"></div>
										</li>										
										<li class="p-4">
											{{ Form::checkbox('sport[]', 'football', in_array('football',$exchange_sport) ? 'checked' : '',['id'=>'football']) }}
											{{ Form::label('Football', 'Football', ['class'=>'check']) }}						
											<div class="check"><div class="inside"></div></div>
										</li>										
										<li class="p-4">
											{{ Form::checkbox('sport[]', 'tennis',in_array('tennis',$exchange_sport) ? 'checked' : '',['id'=>'tennis']) }}
											{{ Form::label('Tennis', 'Tennis', ['class'=>'check']) }}						
											<div class="check"><div class="inside"></div></div>
										</li>
										<li class="p-4">
											{{ Form::checkbox('sport[]', 'casino',in_array('casino',$exchange_sport) ? 'checked' : '',['id'=>'casino']) }}
											{{ Form::label('Casino', 'Casino', ['class'=>'check']) }}								
											<div class="check"></div>
										</li>
									</ul>
							</div>
						</div>
						<div class="form-group">
							<label>Balance</label>
							{{ Form::label('Balance', 'Balance') }}
							{{ Form::text('balance',$up_exchange_data->balance,['class'=> 'form-control','placeholder'=>'$20000'])}}
						</div>
						<div class="row text-center" style="justify-content: center;">
							<div class="col-md-6 col-sm-12">
								{{ Form::submit('Update Exchange',['class' => 'btn btn-outline-primary'])}}
							</div>
						</div>
					{{ Form::close() }}
				</div>
				<!-- Bootstrap Select End -->
			</div>
		</div>
	</div>
</div>
@endsection