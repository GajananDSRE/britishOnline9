@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20">
    <div class="title pb-20">
        <h2 class="h3 mb-0">This Week Overview</h2>
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
                    <th scope="col">#</th>
                    <th scope="col">Exchange</th>
                    <th scope="col">Total Id</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Total Active</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bullexch.com</td>
                    <td>500</td>
                    <td>45000</td>
                    <td>450</td>
                    <td style="font-size: 20px;">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Betfair.com</td>
                    <td>400</td>
                    <td>350000</td>
                    <td>350</td>
                    <td style="font-size: 20px;">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Dafa.com</td>
                    <td>300</td>
                    <td>250000</td>
                    <td>250</td>
                    <td style="font-size: 20px;">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Betdaily.site</td>
                    <td>200</td>
                    <td>15000</td>
                    <td>150</td>
                    <td style="font-size: 20px;">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Britishonline9</td>
                    <td>100</td>
                    <td>50000</td>
                    <td>50</td>
                    <td style="font-size: 20px;">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Striped table End -->
</div>
@endsection
