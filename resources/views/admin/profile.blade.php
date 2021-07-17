@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profile</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">
                        <a href="modal" data-toggle="modal"  class="edit-avatar"><i class="fa fa-pencil"></i></a>
                        <img src="{{ asset('admin/vendors/images/photo1.jpg') }}" alt="" class="avatar-photo">
                    </div>
                    <h5 class="text-center h5 mb-0">{{ $user->name }}</h5>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                        <ul>
                            <li>
                                <span>Email Address:</span>{{ $user->email }}<a href="modal" data-toggle="modal"  class="edit-avatar"><i class="fa fa-pencil" style="padding: 0px 0px 0px 20px;"></i></a>
                            </li>
                            <li>
                                <span>Phone Number:</span>
                                {{ $user->contact }}<a href="modal" data-toggle="modal"  class="edit-avatar"><i class="fa fa-pencil" style="padding: 0px 0px 0px 20px;"></i></a>
                            </li>
                            <li>
                                <span>Whatsapp Number:</span>
                                {{ $user->whatsapp_no }}<a href="modal" data-toggle="modal"  class="edit-avatar"><i class="fa fa-pencil" style="padding: 0px 0px 0px 20px;"></i></a>
                            </li>
                            <li>
                                <span>Country:</span>
                                {{ $user->country }}<a href="modal" data-toggle="modal"  class="edit-avatar"><i class="fa fa-pencil" style="padding: 0px 0px 0px 20px;"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-social">
                        <h5 class="mb-20 h5 text-blue">Your Current Id</h5>
                        <ul class="clearfix">
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/betdaily.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/bullexch.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/RD-LOGO.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/logo.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/betdaily.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/bullexch.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/RD-LOGO.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/logo.png') }}" alt=""></a></li>
                            <li><a href="#" class="btn" data-color="#ffffff"><img src="{{ asset('admin/vendors/images/betdaily.png') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
