<?php

$siteInfoData = siteInfoData();
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
$pageTitle ='Career';
$header_banner = '';

use App\Models\MenuName;

?>
@if(MenuName::where('status',1)->where('type',6)->first())

@extends('frontend.master')
@section('mainContent')
<!--HEADER-->
@if(CommonHeaderBanner::where('type','career')->first())
  @php
    $headerData =CommonHeaderBanner::where('type','career')->first();
    $header_banner = $headerData->b_image;
  
  @endphp
@endif

       <!--HEADER-->
       <div class="header" style="{{ $header_banner != '' ? '' : 'background:#323E48; min-height:100px !important;' }}">
        @if($header_banner != '')
        <img class="banner_image" src="{{asset('uploads/banner/'.$header_banner)}}" alt="">
        @endif            
        <div class="bg-color" style="{{ $header_banner != '' ? '' : 'min-height:100px !important;' }}">
          <!-- Header part start-->
          @include('frontend.includes.header')
          <!-- Header part end-->
        @if(CommonHeaderBanner::where('type','career')->first())
          <div class="wrapper">
            <div class="container">
              <div class="row">
                <div class="banner-info text-center wow fadeIn delay-05s">
                  <h2 class="bnr-sub-title">{{$headerData->b_title}}<br>
                    @if($headerData->b_subTitle !='')
                    <span style=""> {{$headerData->b_subTitle}}</span>
                    @endif
                  </h2>
                  @if($headerData->b_textContent !='')
                  <p style=""> {{$headerData->b_textContent}}</p>
                  @endif
                </div>
              </div>
            </div>
          </div>
         @endif 
        </div>
      </div>
      @if(CommonHeaderBanner::where('type','career')->first())
      @if($headerData->b_quote !='')
      <div class="banner_coute_content" style="">
        <div class="container" >
          <h3><span>“</span>{{$headerData->b_quote}}<span>”</span></h3>
        </div>
      </div>
      @endif
    @endif
      <!--/ HEADER-->

      <!---->
    <!--career content info start-->
    <section id="career_info">
        <div class="container">
            <div class="row career_common_p">
              <div class="offset-md-1 offset-lg-1 col-12 col-sm-12 col-md-10 col-xl-10 col-lg-10">
                  <h4 class="text-bold" style="color:black;">
                      {{$careercommon->title}}
                  </h4>
                  <p  style="font-size:20px; color:black; margin:20px 0; font-family:inherit;">{!!$careercommon->career_text!!}</p>
              </div>

            </div>
            <div class="row">
                <div class="offset-md-1 offset-lg-1 col-12 col-sm-12 col-md-10 col-xl-10 col-lg-10">
                    @if(count($careers) > 0)
                    @foreach($careers as $career)
                    <div class="career_info_content">
                        <div class="career_info_title">
                            <h3>{{$career->title}}</h3>
                        </div>
                        <div class="career_required_info">
                            <p>{!!$career->textContent!!}</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach
           
                    @endif
                   
                <!-- support headline      -->
                    <div class="career_common_footer_p "><p>
                        {!!$careercommon->career_footer!!}</p>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
        <!--career content info end-->
    
@endsection
@else
<script type="text/javascript">
    // Hide the template after a few seconds
    setTimeout(function () {

        window.location.href = '/'; 
    }, 50); 

    </script> 
@endif