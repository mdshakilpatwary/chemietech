<?php
use App\Models\CommonHeaderBanner;
use App\Models\AboutPageElement;
$pageTitle ='Import for Local Stock of Supply';

?>

@extends('frontend.master')
@section('mainContent')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center">Representation of Foreign Partner</h1>
            <p class="breadcrumb text-center text-light">
                Our global representation includes over 18+ supply corporations that are committed to supporting and developing Bangladesh's ceramic, glass, and related industries at a significant level.
            </p>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Details Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row g-4">
                @if(count($businessArea) > 0)
                @foreach($businessArea as $businessAreadata)
                <div class="col-md-12 col-lg-12  wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="p-4 border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{$businessAreadata->title}}</h4>
                            <p>
                                {!!$businessAreadata->description!!}
                            </p><hr>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <h5 class="alert text-center">Data Did Not Uploaded</h5>
                @endif

            </div>
        </div>
    </div>
    <!-- Details End -->
@endsection