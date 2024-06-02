<?php
use App\Models\CommonHeaderBanner;
$siteInfoData = siteInfoData();

$pageTitle ='Career';


?>
<style>
  p{
    color: black;
  }

</style>
@extends('frontend.master')
@section('mainContent')
    <!-- Page Header Start -->
    @php
    $pageHeaderBanner =CommonHeaderBanner::where('type','Careers')->first();
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

  <!-- Careers Start -->
  <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
      <div class="container feature px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                  <div class="p-lg-5 ps-lg-0">
                      <div class="section-title text-start">
                          <h1 class="display-5 mb-4">{{$careercommon->title}}</h1>
                      </div>
                      <p class="mb-4 pb-2">
                        {!!$careercommon->career_text!!}
                      </p>
                      <hr>
                      @if(count($careers) > 0)
                      @foreach($careers as $career)
                      <h3>{{$career->title}}</h3>
                      <p class="py-2">{!!$career->textContent!!}</p>
                      @endforeach
                      @else
                      <h5 class="alert text-center">Currently We are not offering any kind of job</h5>
                      @endif
                      <hr>
                      <p class="mb-4 pb-2">
                        {!!$careercommon->career_footer!!}
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Careers End -->
@endsection
