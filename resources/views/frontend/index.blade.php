<?php
use App\Models\CommonHeaderBanner;
use App\Models\HomePageElement;
$pageTitle ='CHEMIE TECH - Raw Materials, Chemicals & Technology';

?>
@extends('frontend.master')

@section('mainContent')

    <!-- Carousel Start -->
    @if(count($bannerSliders) > 0)
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach($bannerSliders as $bannerSlider)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset($bannerSlider->image)}}" alt="" style="height: 600px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{$bannerSlider->sub_title}}</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">{{$bannerSlider->title}}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">{{$bannerSlider->short_text}}</p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
    @endif
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" id="aboutUs_section">
        <div class="container about px-lg-0">
            @if(HomePageElement::where('type',1)->first())
            @php
            $homeabout = HomePageElement::where('type',1)->first();
            @endphp
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($homeabout->image)}}" style="object-fit: cover;padding: 20px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-1">{{$homeabout->title}}</h1>
                        </div>
                        <p class="mb-4 pb-2">
                            {!!$homeabout->description!!}
                        </p>
                        <!-- <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> -->
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- About End -->

    <!-- Industries We Serve Start -->
    <div class="container-fluid  overflow-hidden px-lg-0">
        <div class="container about px-lg-0">
 @if(HomePageElement::where('type',2)->first())

            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-center">
                            <h1 class="display-5 mb-5">Industries We Serve</h1>
                        </div>
                        <div class="row g-4 mb-4 pb-2">
                            @php
                            $homeindustrials = HomePageElement::where('type',2)->get();
                            @endphp
                            @foreach($homeindustrials as $homeindustrial)
                            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center" >
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <img class="img-fluid" src="{{asset($homeindustrial->image)}}" alt="">
                                    </div>
                                    <div class="ms-3" >
                                        <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; {{$homeindustrial->title}}</h2>
                                        <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                            
                            
                            
                            
                        </div>
                        <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> -->
                    </div>
                </div>
            </div>
@endif
        </div>
    </div>
    <!-- Industries We Serve End -->

    <!-- Business Area Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Business Area</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h1 class="display-1 text-pink mb-0">01</h1>
                        <div class="d-flex align-items-center justify-content-center " style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{asset('frontend')}}/img/international-relations.png" alt="">
                        </div>
                    </div>
                    <a href="representationofforeignpartner.html" target="_blank" style="font-weight: bold;font-size: large;">Representation of Foreign Partner <i class="fas fa-arrow-alt-circle-right"></i></a><hr>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h1 class="display-1 text-pink mb-0">02</h1>
                        <div class="d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{asset('frontend')}}/img/supply-chain-management.png" alt="">
                        </div>
                    </div>
                    <a href="importforlocalstockofsupply.html" target="_blank" style="font-weight: bold;font-size: large;">Import for Local Stock and Supply <i class="fas fa-arrow-alt-circle-right"></i></a><hr>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h1 class="display-1 text-pink mb-0">03</h1>
                        <div class="d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="{{asset('frontend')}}/img/solution.png" alt="">
                        </div>
                    </div>
                    <a href="technicalsolutionofconsultancy.html" target="_blank" style="font-weight: bold;font-size: large;">Technical Solution and Consultancy <i class="fas fa-arrow-alt-circle-right"></i></a><hr>
                </div>
            </div>
        </div>
    </div>
    <!-- Business Area End -->

    <!-- Our Products Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Products</h1>
            </div>
            <div class="row g-4">
                @if(count($productCategories) > 0)
                @foreach($productCategories as $pcategory)
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            @if($pcategory->image !=null)
                            <img class="img-fluid" src="{{asset($pcategory->image)}}" alt="" style="width: 100%; height: 300px;">
                            @else
                            <img class="img-fluid" src="{{asset('frontend')}}/img/carousel-1.jpg" alt="" style="width: 100%; height: 300px;">
                            @endif
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{$pcategory->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
              
            </div>
        </div>
    </div>


    <!-- Lets Connect Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            @if(HomePageElement::where('type',3)->first())
            @php
            $homeContact = HomePageElement::where('type',3)->first();
            @endphp
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($homeContact->image)}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">{{$homeContact->title}}</h1>
                        </div>
                        <p class="mb-4 pb-2">{{$homeContact->description}}</p>
                        <form action="{{route('user.contact.store')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" class="form-control border-0" value="{{old('name')}}" placeholder="Your Name" style="height: 55px;" required>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>           
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control border-0" value="{{old('email')}}" placeholder="Your Email" style="height: 55px;" required>
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>           
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="phone" class="form-control border-0" value="{{old('phone')}}" placeholder="Your Mobile" style="height: 55px;" required>
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>           
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="subject" class="form-control border-0" placeholder="Subject" value="{{old('subject')}}" style="height: 55px;" required>
                                    @error('subject')
                                    <p class="text-danger">{{$message}}</p>           
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="message" placeholder="Your Special Note/Message" required>{{old('message')}}</textarea>
                                    @error('message')
                                    <p class="text-danger">{{$message}}</p>           
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- Lets Connect End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @if(count($testimonials) > 0)
                @foreach($testimonials as $testimonial)
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset($testimonial->image)}}" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>{{$testimonial->description}}</p>
                        <h5 class="mb-1">{{$testimonial->name}}</h5>
                        <span class="fst-italic">{{$testimonial->title}}</span>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- News/Events Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Latest News & Events</h1>
            </div>
            <div class="row g-4"> 
                @if(count($newsevents) >0)
                @foreach($newsevents as $newsevent)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset($newsevent->image)}}" alt="" style="width: 100%; height: 300px;">
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{$newsevent->title}}</h4>
                                <small>{!!Str::words($newsevent->description,5, '...')!!}</small><hr>
                                <a class="fw-medium" href="{{route('single.news.page',$newsevent->slug)}}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- News/Events End -->

@endsection
