@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Create ID</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="add exch.html">Setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create ID</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 ">
                <div class="pd-20 card-box height-100-p">
                    <h5 class="text-center h5 mb-10">Create ID</h5>
                    <!-- Bootstrap Select Start -->
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Client Base</label>
                                    <select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
                                        <optgroup data-max-options="2">
                                            <option>Super Master</option>
                                            <option>Master</option>
                                            <option>Super Admin</option>
                                            <option>Admin</option>
                                            <option>User</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Select Site</label>
                                    <select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
                                        <optgroup data-max-options="2">
                                            <option>Bullexch.com</option>
                                            <option>Betdaily.site</option>
                                            <option>Britishonline9.com</option>
                                            <option>Dafa.com</option>
                                            <option>Bullexch.com</option>
                                            <option>Betdaily.site</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>User Id</label>
                            <input class="form-control" type="text" placeholder="Johnny Brown">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" placeholder="Kaka11">
                        </div>
                        <div class="form-group">
                            <label>Balance</label>
                            <input class="form-control" type="text" placeholder="$20000">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control"placeholder="*********">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Conform Password</label>
                                    <input type="text" class="form-control" placeholder="*********">
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <button type="button" class="btn btn-outline-primary">Add Exchange</button>
                            </div>
                        </div>
                    </form>
                    <!-- Bootstrap Select End -->
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
