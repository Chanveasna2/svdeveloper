@extends('front.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay1">

        <div class="container text-item">
            <h1>Professional Website</h1>
            <h4>Call us now: 010 254 294</h4>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="view" style="color: white;border-color: white"><span>View our works</span></button>
            <div style="margin-top: 50px;" id="one">
                <a href="#one" class="test" style="font-size: 60px;color: white"><span class="scroll-down et-pb-icon"><i class="fa fa-arrow-circle-down"></i></span></a>

            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="container" style="margin-top: 80px;margin-bottom: 80px"  >
            <div class="row">
                <div class="col-md-4">
                    <a href="#"> <img src="/images/portfolio.png" width="100px" class="img-fluid service" > </a>
                    <h4 class="service-title">Portfolio Website</h4>
                    <p class="service-desc">Get beautiful website which adjust to fit mobile and tablet screens of all sizes and update yourself 24/7.</p>
                </div>
                <div class="col-md-4">
                    <a href="#"><img src="/images/ecommerce.png" width="100px" class="img-fluid service"></a>
                    <h4 class="service-title">E-Commerce Website</h4>
                    <p class="service-desc">Get beautiful website which adjust to fit mobile and tablet screens of all sizes and update yourself 24/7.</p>
                </div>
                <div class="col-md-4">
                    <a href="#"><img src="/images/stock.png" width="100px" class="img-fluid service"></a>
                    <h4 class="service-title">Stock Management System</h4>
                    <p class="service-desc">Get beautiful website which adjust to fit mobile and tablet screens of all sizes and update yourself 24/7.</p>
                </div>
                <div class="col-md-4">
                    <a href="#"><img src="/images/pos.png" width="100px" class="img-fluid service"></a>
                    <h4 class="service-title">POS System</h4>
                    <p class="service-desc">Get beautiful website which adjust to fit mobile and tablet screens of all sizes and update yourself 24/7.</p>
                </div>
                <div class="col-md-4">
                    <a href="#"><img src="/images/mobile.png" width="100px" class="img-fluid service"></a>
                   <h4 class="service-title">Mobile App</h4>
                    <p class="service-desc">Get beautiful website which adjust to fit mobile and tablet screens of all sizes and update yourself 24/7.</p>
                </div>
                <div class="col-md-4">
                    <a href="#"><img src="/images/training.png" width="100px" class="img-fluid service"></a>
                   <h4 class="service-title">Training Course</h4>
                    <p class="service-desc">Get beautiful website which adjust to fit mobile and tablet screens of all sizes and update yourself 24/7.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-overlay">

        <div class="container text-choose">
            <h3>Why choose Anachak Technology?</h3>
            <ul>
                <li>Save time</li>
                <li>Unlimited Lifetime Support</li>
                <li>Update yourself 24/7</li>
                <li>Awesome & Affordable</li>
            </ul>

        </div>
        {{--<img class="img-fluid promote" src="/images/office.jpg">--}}

    </div>
    <div class="container-fluid" style="margin-top: 80px;margin-bottom: 80px">
        <div class="container">
            <h1 style="color: #88c002;text-align: center">Our Clients</h1>
            <hr style="background-color: #88c002;">
            <img class="img-fluid" src="/images/clients.png">
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>


@stop
