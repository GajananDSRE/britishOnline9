@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Setting</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Rules</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="html-editor pd-20 card-box mb-30">
            <div class="">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add Rules</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="">
                            <a class="btn btn-primary" href="#" role="button" data-toggle="dropdown">
                                Submit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <textarea class=" form-control border-radius-0" placeholder="Enter text ..."></textarea>
        </div>
    </div>
</div>
@endsection
