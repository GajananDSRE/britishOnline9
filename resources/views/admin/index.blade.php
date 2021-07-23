@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12 ">
                    <h3>Dashboard</h3>
                </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a class="btn btn-primary" href="{{ route('admin.add-exchange') }}" role="button" >
                        Add Exchange
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">75</div>
                        <div class="font-14 text-secondary weight-500">Active User</div>
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
                        <div class="font-14 text-secondary weight-500">Total User</div>
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
                        <div class="font-14 text-secondary weight-500">Total Site</div>
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
                        <div class="weight-700 font-24 text-dark">$50,000</div>
                        <div class="font-14 text-secondary weight-500">Earning</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Striped table start -->
    <div class="pd-20 card-box mb-30  table-responsive">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">We have Exchange Id</h4>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Exchange</th>
                    <th scope="col">Total Id</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Total Active</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                   @foreach($exchange_data as $data)
                    <tr class="ex-row-{{ $i }}">
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $data->name }}</td>
                        <td>500</td>
                        <td>{{ $data->balance }}</td>
                        <td>450</td>
                        <td style="font-size: 20px;">
                            <a href="{{ route('admin.edit-exchange', $data->id) }}"><i class="fa fa-pencil" style="padding: 0px 0px 0px 20px;"></i></a> 
                            <!-- <a href="{{ route('admin.delete-exchange', $data->id) }}"><i class="fa fa-trash" style="padding: 0px 0px 0px 20px;"></i></a> -->
                            <a onclick="deleteExchange('{{$data->id}}')" ><i class="fa fa-trash" style="padding: 0px 0px 0px 20px;"></i></a>


                            {{ Form::open(array('id'=>'exchange-lock','style'=> 'float:left' )) }}
                            {{ Form::hidden('id',$data->id,['id'=>'user_id'])}}
                            {{ Form::hidden('is_lock_id',$data->is_lock_id, ['id'=>'is_lock_id']) }}
                            
                            <button class="" type="button" style="border: 0px;" onclick="updateLockSettings('{{$data->id}}','{{$data->is_lock_id}}')">
                                @if($data->is_lock_id)
                                <i class="icon-copy fa fa-lock" aria-hidden="true" ></i>
                                @else
                                <i class="icon-copy fa fa-unlock" aria-hidden="true" ></i>
                                @endif
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                <?php $i++; ?>
                  @endforeach
            </tbody>
        </table>
    </div>
    <!-- Striped table End -->
</div>
<script>
    function updateLockSettings(id,is_lock_id){

       $.ajax({
            type: "POST",
            dataType: "json",
            url: '{{ route('admin.lock-exchange') }}',
            data: {'id': id, 'is_lock_id': is_lock_id },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(data){
              console.log(data.success)
              console.log(data.result)
            },
            error: function(data) { // if error occured
                console.log(data.error)
            },
        });
    }

</script>
<script>
    function deleteExchange(id){
        
       $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.delete-exchange') }}',
            data: {'id': id },

            success: function(data){
              console.log(data.success)
              console.log()
              $('.ex-row-'+data.row).fadeOut('fast');
            },
            error: function(data) { // if error occured
                console.log(data.error)
            },
        });
    }

</script>

@endsection
