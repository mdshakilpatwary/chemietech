<?php
use App\Models\CommonHeaderBanner;
use App\Models\GroupImage;
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
                        @php
                        $newsGroupImages =GroupImage::where('news_id',$newsevent->id)->get();
                        @endphp
                        @foreach($newsGroupImages as $newsGroupImage)
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s" >
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{asset($newsGroupImage->group_image)}}" alt="" style="width: 100%; height: 300px;">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="{{asset($newsGroupImage->group_image)}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Details End -->

    <!-- Next/Previous Button Start -->
    
    <!-- Next/Previous Button End -->


@endsection