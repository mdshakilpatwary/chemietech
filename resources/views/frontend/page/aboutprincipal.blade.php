<?php
use App\Models\CommonHeaderBanner;
use App\Models\AboutPageElement;
$pageTitle ='Our Principal';

?>

@extends('frontend.master')
@section('mainContent')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown text-center">Our Principal</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Principal Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <!-- <h1 class="display-5 mb-5">For Textiles</h1> -->
        </div>
        <div class="row g-4">
            @if(count($principals) > 0)
            @foreach($principals as $principal)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <a target="_blank" href="{{($principal->url ==null)? '#' : $principal->url }}">
                                <img class="img-fluid" src="{{asset($principal->image)}}" alt="">
                            </a>
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <p>{{$principal->title}}</p>
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

<!-- Principal End -->

@endsection

