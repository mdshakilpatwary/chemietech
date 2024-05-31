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
    <!-- Product(ceramic) Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">{{$subcat->name}}</h1>
            </div>
            <div class="row g-4">
                @php
                $products = Product::where('cat_id', $category->id)->where('subcat_id',$subcat->id)->where('status',1)->orderBy('id','desc')->get();
                @endphp
                @if(count($products) > 0)
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset($product->image)}}" alt="">
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{$product->name}}</h4>
                                <small>{{$product->description}}</small>
                                <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
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
    <!-- Product(ceramic) End -->
@endforeach
@else
<h5 class="alert alert-info text-center">Data Did Not Uploaded</h5>
@endif
 

@endsection