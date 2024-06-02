<?php
use App\Models\CommonHeaderBanner;
use App\Models\AboutPageElement;
$pageTitle ='Certifications';
?>

@extends('frontend.master')
@section('mainContent')
    <!-- Page Header Start -->
    @php
    $pageHeaderBanner =CommonHeaderBanner::where('type','Certifications')->first();
    @endphp
    @if($pageHeaderBanner != null)
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url({{asset($pageHeaderBanner->b_image)}}); background-size:cover; background-position:center center;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center">{{$pageHeaderBanner->b_title}}</h1>
            <p class="breadcrumb text-center text-light">{{$pageHeaderBanner->b_textContent}}</p>
        </div>
    </div>
    @endif
    <!-- Page Header End -->


    <!-- Certification Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 portfolio-container">
                @if(count($certifications) > 0)
                    @foreach($certifications as $certification)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset($certification->image)}}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{asset($certification->image)}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <!-- <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a> -->
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">{{$certification->sub_title}}</p>
                                <h5 class="lh-base mb-0">{{$certification->title}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <h5 class="alert alert-info text-center">Data Did Not Uploaded</h5>
                @endif

            </div>
        </div>
    </div>
    <!-- Certification End -->


@endsection