<?php
$siteInfoData = siteInfoData();
use App\Models\CommonHeaderBanner;
$pageTitle ='Contact';

?>

@extends('frontend.master')
@section('mainContent')
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown text-center">Let's connect!</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact info Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">How to Reach Us</h1>
                    </div>
                    <p class="mb-4 pb-2">Do you have a project in mind? Contact us to discuss it with one of our top experts. Whether you prefer to send us a message or give us a call, we're here to assist you anytime, from anywhere. Let's collaborate and make your project a success!</p>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">{{$siteInfoData->phone_1}}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-mobile-alt fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">{{$siteInfoData->phone_2}}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <a href="{{$siteInfoData->map}}" target="_blank" class="mb-2">Google Map</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row g-4">    
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope  fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">{{$siteInfoData->email}}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope  fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">{{$siteInfoData->email_2}}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope  fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">{{$siteInfoData->email_3}}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row g-4"> 
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-building  fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2"><b>Corporate Office:</b> {{$siteInfoData->address_1}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-warehouse fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2"><b>Warehouse 1:</b> {{$siteInfoData->warehouse_1}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-warehouse fa-2x text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2"><b>Warehouse 2:</b> {{$siteInfoData->warehouse_2}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact info End -->

<!-- Contact form Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Let's connect!</h1>
                    </div>
                    <p class="mb-4">We value your input and are here to address any questions or concerns you may have. Whether you're interested in our services, have feedback to share, or simply want to say hello, we're eager to hear from you.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Your Special Note/Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.475169923389!2d90.41218669999999!3d23.730429100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b99e5a008d07%3A0xea1d40320b44c04!2sCHEMIE%20TECH!5e0!3m2!1sen!2sbd!4v1715682810777!5m2!1sen!2sbd" frameborder="0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact form End -->
@endsection