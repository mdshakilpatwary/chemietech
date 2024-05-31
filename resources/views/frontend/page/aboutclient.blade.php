<?php
use App\Models\Client;
use App\Models\AboutPageElement;
$pageTitle ='Our Clients';

?>


@extends('frontend.master')
@section('mainContent')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown text-center">Our Clients</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Client Start -->
    @if(count($clientcats) > 0)
    @foreach($clientcats as $clientcat)
        <div class="container-xxl py-5">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5">For {{$clientcat->name}}</h1>
                </div>
                <div class="row g-4">
                    @php
                       $clients = Client::where('status',1)->where('clientCat_id', $clientcat->id)->orderBy('id','desc')->get();
                    @endphp
                    @if(count($clients) > 0)
                    @foreach($clients as $client)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <a href="{{($client->url ==null)? '#' : $client->url }}">
                                        <img class="img-fluid" src="{{asset($client->image)}}" alt="">
                                    </a>
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
    @endforeach
    @else
    <h5 class="alert alert-info text-center">Data Did Not Uploaded</h5>
    @endif
    <!-- Client End -->


@endsection