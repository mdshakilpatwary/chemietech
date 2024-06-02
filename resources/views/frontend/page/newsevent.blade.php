<?php
use App\Models\CommonHeaderBanner;
use App\Models\AboutPageElement;
$pageTitle ='News Event';

?>

@extends('frontend.master')
@section('mainContent')

    <!-- Page Header Start -->
    @php
    $pageHeaderBanner =CommonHeaderBanner::where('type','News&Events')->first();
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


    <!-- News/Events Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Services</h1>
            </div> -->
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
                @if(count($newsevents) >9)
                <div class="blog-filter pt-4" style="display: flex; justify-content:space-around;">
                    <span class="store-qty" style="padding:0 10px; font-size: 20px">Showing {{ $newsevents->firstItem() }} - {{ $newsevents->lastItem() }} News Event</span>
                    
                    <div class="">
                        
                       
                        <div class="custom-pagination text-center">
                            <div class="pagination" >
                                {{-- Previous Page Link --}}
                                @if ($newsevents->onFirstPage())
                                    <span class="disabled" style="padding:0 10px; font-size: 20px">Previous</span>
                                @else
                                    <a href="{{ $newsevents->previousPageUrl() }}" style="padding:0 10px; font-size: 20px" rel="prev">Previous</a>
                                @endif
                        
                                {{-- Pagination Elements --}}
                                @for ($i = 1; $i <= $newsevents->lastPage(); $i++)
                                    @if ($i == $newsevents->currentPage())
                                        <span class="current" style="padding:0 5px; font-size: 20px">{{ $i }}</span>
                                    @else
                                        <a href="{{ $newsevents->url($i) }}" style="padding:0 5px; font-size: 20px">{{ $i }}</a>
                                    @endif
                                @endfor
                        
                                {{-- Next Page Link --}}
                                @if ($newsevents->hasMorePages())
                                    <a href="{{ $newsevents->nextPageUrl() }}" rel="next" style="padding:0 10px; font-size: 20px">Next</a>
                                @else
                                    <span class="disabled" style="padding:0 10px; font-size: 20px">Next</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @else
                <h5 class="alert alert-info text-center">Data Did Not Uploaded</h5>
                @endif
            </div>
        </div>
    </div>
    <!-- News/Events End -->

@endsection