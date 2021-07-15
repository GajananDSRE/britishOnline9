@extends('users.layouts.master')
@section('content')
    <section class="service-wrapper py-3"id="service">
        <div class="container-fluid pb-3">
            <div class="row justify-content-center">
                <div class="section-heading1 ">
                    <h2>offe<em>r's</em></h2>
                    <img src="{{asset('images/line-dec.png')}}" alt="waves">
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Offers <em>For You</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="container-lg py-5">        
                <div class="row px-lg-3">    
                    <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                        <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                            <img src="{{asset('images/offer_card.jpg')}}" alt="" style="">
                        </div>
                    </div>
                    <div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
                        <div class="pricing-table card bg-secondar h-100 card-rounded shadow-sm border-0 py-5">
                            <img src="{{asset('images/offer_card.jpg')}}" alt="" style="">
                        </div>
                    </div>
                    <div class="col-md-4 pb-5 pt-sm-0 mt-5 px-xl-3">
                        <div class="pricing-table card h-100 shadow-sm border-0 py-5">
                            <img src="{{asset('images/offer_card.jpg')}}" alt="" style="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
