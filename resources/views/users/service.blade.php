@extends('users.layouts.master')
@section('content')
    <section class="service-wrapper py-3"id="service">
        <div class="container-fluid pb-3">
            <div class="row justify-content-center">
                <div class="section-heading1 ">
                    <h2>Ser <em>vice</em></h2>
                    <img src="{{asset('images/line-dec.png')}}" alt="waves">
                </div>
            </div>
        </div>
        <div class="service-tag py-5 bg-secondary">
            <div class="col-md-12">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link main-butto active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">API's</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link main-button1 rounded-pill text-light px-4 light-300" href="#" data-filter=".graphic">UI/UX</a>
                    </li>
                    <li class="filter-btn nav-item mx-lg-4">
                        <a class="filter-btn nav-link main-button1 rounded-pill text-light px-4 light-300" href="#" data-filter=".ui">Website Design</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link main-button1 rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">Poster Marketing</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link main-button1 rounded-pill text-light px-4 light-300" href="#" data-filter=".branding">White Label</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">UI/UX design</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="c" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Social Media</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Marketing</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Graphic</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Digtal Marketing</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Market Research</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project branding">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Business</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic branding">
                <a href="contact.html" class="service-work Service-card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="{{asset('images/ui_ux.jpg')}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">Branding</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
