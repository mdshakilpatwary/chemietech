<?php
use App\Models\CommonHeaderBanner;
use App\Models\AboutPageElement;
$pageTitle = $newsevent->title;

?>

@extends('frontend.master')
@section('mainContent')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center">{{$newsevent->title}}</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset($newsevent->image)}}" style="object-fit:cover;padding-left: 5%; padding-right: 5%;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Details Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 ">
                <div class="col-lg-12 col-md-12 ps-lg-0">
                    <h4 class="mb-3">{{$newsevent->title}}</h4><hr>
                    <p class="mb-4 pb-2">
                        {!!$newsevent->description!!}
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 ps-lg-0">
                    <div class="row g-4 portfolio-container">
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s" >
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_02.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_02.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_03.jpg" alt="" >
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_03.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_04.jpg" alt="" >
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_04.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Details End -->

    <!-- Next/Previous Button Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-sm-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <div class="d-flex ">
                        <div class="d-flex flex-shrink-0 justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-arrow-circle-left fa-2x text-pink"></i>
                        </div>
                        <div class="ms-3">
                            <h2 class="text-pink mb-1">Previous</h2>
                            <p class="fw-medium mb-0">Asean Ceramics 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <div class="d-flex right" style="position: right;">
                        <div class="ms-3">
                            <h2 class="text-pink mb-1">Next</h2>
                            <p class="fw-medium mb-0">PaperTech Expo 2023</p>
                        </div>
                        <div class="d-flex flex-shrink-0  justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-arrow-circle-right  fa-2x text-pink"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Next/Previous Button End -->


@endsection