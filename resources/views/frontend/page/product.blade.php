<?php
use App\Models\Product;
use App\Models\AboutPageElement;
$pageTitle =$category->name;

?>

@extends('frontend.master')
@section('mainContent')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="{{($category->image != null)? 'background-image:url('.asset($category->image) : '' }}) ; background-size:cover; background-position:center center;"
     >
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center">{{$category->name}}</h1>
        </div>
    </div>
    <!-- Page Header End -->

@if(count($subcats) > 0)
@foreach($subcats as $subcat)
<style>
    .more-content {
        display: none;
    }
    .read-more {
        color: blue;
        cursor: pointer;
    }
</style>
    <!-- Product(ceramic) Start -->
    @php
    $products = Product::where('cat_id', $category->id)->where('subcat_id',$subcat->id)->where('status',1)->orderBy('id','desc')->get();
    @endphp
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                @if(count($products) > 0)
                <h1 class="display-5 mb-5">{{$subcat->name}}</h1>
                @endif
            </div>
            <div class="row g-4">
                
                @if(count($products) > 0)
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset($product->image)}}" alt="" style="width: 100%; height: 300px;">
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{$product->name}}</h4>
                                {{-- <small>{{$product->description}}</small> --}}
                                <div>
                                    <p>
                                        {{ Str::words($product->description, 10, '') }}
                                        @if (str_word_count($product->description) > 10)
                                            <span class="more-content">{{ Str::substr($product->description, strlen(Str::words($product->description, 10, ''))) }}</span>
                                            <span class="read-more">Read More</span>
                                        @endif
                                    </p>
                                </div>
                                <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
                
            </div>
        </div>
    </div>
    <!-- Product(ceramic) End -->
@endforeach
@else
<h5 class="alert text-center">No Product Found</h5>
@endif
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
    $(document).ready(function() {
        $('.read-more').click(function() {
            $(this).prev('.more-content').toggle();
            if ($(this).text() === 'Read More') {
                $(this).text('Read Less');
            } else {
                $(this).text('Read More');
            }
        });
    });
</script>
@endsection
