<?php
use App\Models\CommonHeaderBanner;
use App\Models\PageElement;
$pageTitle ='CHEMIE TECH - Raw Materials, Chemicals & Technology';

?>
@extends('frontend.master')

@section('mainContent')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
      <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banneer 2.png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Chemie Tech</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Chemical & Technical Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2"> Chemie Tech is the Most Reliable and Certified Chemical & Technical Consultancy Service Provider in Bangladesh</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 1.png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 11.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 12.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Chemie Tech</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Chemical & Technical Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2"> Chemie Tech is the Most Reliable and Certified Chemical & Technical Consultancy Service Provider in Bangladesh</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 3.png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 4.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 6.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Chemie Tech</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Chemical & Technical Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2"> Chemie Tech is the Most Reliable and Certified Chemical & Technical Consultancy Service Provider in Bangladesh</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 7.png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 8.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Banner 9.png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Chemie Tech</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Chemical & Technical Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2"> Chemie Tech is the Most Reliable and Certified Chemical & Technical Consultancy Service Provider in Bangladesh</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/Lime handful (2).JPG" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/NoelVisuels-Collection.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/wa 5.png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Chemie Tech</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Chemical & Technical Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2"> Chemie Tech is the Most Reliable and Certified Chemical & Technical Consultancy Service Provider in Bangladesh</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/wa 6.jpg" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{asset('frontend')}}/img/Home Page banner/wet-strength-resin-500x500 (2).png" alt="">
              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-12 col-lg-8 text-center">
                              <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                              <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                              <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                              <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                              <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <div class="container-fluid bg-light overflow-hidden px-lg-0">
      <div class="container about px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100 h-100" src="{{asset('frontend')}}/img/about.jpg" style="object-fit: cover;padding: 20px;" alt="">
                  </div>
              </div>
              <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                  <div class="p-lg-5 pe-lg-0">
                      <div class="section-title text-start">
                          <h1 class="display-5 mb-4">About Us</h1>
                      </div>
                      <p class="mb-4 pb-2">Founded in 2021, Chemie Tech become one of the leading Industrial Raw materials, Chemicals, Colors & Spare part Indenter, Importer & Suppliers of Ceramics, Glass, Textiles, Pharmaceuticals, Food & Beverage, Metallurgical, Pulp & Paper with guaranteed quality, reliable supply, efficient handling and delivery Just In Time with sustainability.
                          <br><br>
                      <b>The Beginning:</b>
                      Chemie Tech started journey with a tiny office and small number of staff focused on business food ingredient. Continuously the product portfolio has been enlarged operation procedure through warehousing and distribution approached.
                          <br> <br>
                      <b>The Recent Days:</b>
                      The reason you can choose, our company helps to accelerate science with innovative workflow solution with a network across the industrial community. Our sales team not only selling product but also adding value for our customer providing the logistic service as well as quality goods. Furthermore, We sincerely you to build together the most comprehensive solution of sourcing platform for Industrial Raw materials and Chemical technology.

                      <br> <br>
                      <b>Mission Vision Value:</b>
                      We are people with 0 % tolerance for unethical conduct and 100% belief in system, process and compliance to our valued customer’s corporate policy. Our innovative ways to solving Supply Chain Challenges of esteemed customer, bring this solution deliver real breakthrough and true result.
                      <br> <br>
                      Our vision value to be competitive, flexible and dynamic supplier anticipating and satisfying customer requirements.

                      <br> <br>
                      <b>In nutshell:</b>
                      Chemie Tech adhere to professional leadership, experience, commitment towards quality, delivery strong understanding of customer need, performance , perfection exemplary culture, attitude work ethics and effective implementation.

                      </p>
                      <!-- <div class="row g-4 mb-4 pb-2">
                          <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <i class="fa fa-users fa-2x text-primary"></i>
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                      <p class="fw-medium mb-0">Happy Clients</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <i class="fa fa-check fa-2x text-primary"></i>
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                      <p class="fw-medium mb-0">Projects Done</p>
                                  </div>
                              </div>
                          </div>
                      </div> -->
                      <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->

  <!-- Industries We Serve Start -->
  <div class="container-fluid  overflow-hidden px-lg-0">
      <div class="container about px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-12 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                  <div class="p-lg-5 pe-lg-0">
                      <div class="section-title text-center">
                          <h1 class="display-5 mb-5">Industries We Serve</h1>
                      </div>
                      <div class="row g-4 mb-4 pb-2">
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center" >
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/1. Tableware.png" alt="">
                                  </div>
                                  <div class="ms-3" >
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Tableware</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/2. Sanitaryware.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Sanitaryware</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/3. Tiles.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Tiles</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/4. Insulator.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Insulator</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/5. Pottery.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Pottery</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/6. Opal Glass Ware.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Opal Glass Ware</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/7. Glass Ware.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Glass Ware</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/8. Sheet Glass.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Sheet Glass</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/9. Metallurgy & Steel.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Metallurgy & Steel</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/10. Paint.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Paint</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/Adhesive.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Adhesive</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/13. Footwear.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Footwear</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/14. Leather.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Leather</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/11. Paper.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Paper</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/15. Tissue.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Tissue</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                              <div class="d-flex align-items-center">
                                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                      <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/12. Screen Printing.png" alt="">
                                  </div>
                                  <div class="ms-3">
                                      <h2 class="text-primary mb-1" style="filter: drop-shadow(1px .5px .5px #fd0070);border-left: 3px solid #fd0070;">&nbsp; Screen Printing</h2>
                                      <!-- <p class="fw-medium mb-0">Happy Clients</p> -->
                                  </div>
                              </div>
                          </div>
                          
                          
                      </div>
                      <!-- <a href="" class="btn btn-primary py-3 px-5">Explore More</a> -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Industries We Serve End -->

  <!-- Business Area Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Our Business Area</h1>
          </div>
          <div class="row g-5">
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                      <h1 class="display-1 text-pink mb-0">01</h1>
                      <div class="d-flex align-items-center justify-content-center " style="width: 60px; height: 60px;">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/international-relations.png" alt="">
                      </div>
                  </div>
                  <a href="representationofforeignpartner.html" target="_blank" style="font-weight: bold;font-size: large;">Representation of Foreign Partner <i class="fas fa-arrow-alt-circle-right"></i></a><hr>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                      <h1 class="display-1 text-pink mb-0">02</h1>
                      <div class="d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/supply-chain-management.png" alt="">
                      </div>
                  </div>
                  <a href="importforlocalstockofsupply.html" target="_blank" style="font-weight: bold;font-size: large;">Import for Local Stock and Supply <i class="fas fa-arrow-alt-circle-right"></i></a><hr>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                      <h1 class="display-1 text-pink mb-0">03</h1>
                      <div class="d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/solution.png" alt="">
                      </div>
                  </div>
                  <a href="technicalsolutionofconsultancy.html" target="_blank" style="font-weight: bold;font-size: large;">Technical Solution and Consultancy <i class="fas fa-arrow-alt-circle-right"></i></a><hr>
              </div>
          </div>
      </div>
  </div>
  <!-- Business Area End -->

  <!-- old Industries We Serve Start -->
  <!-- <div class="container-xxl py-5">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Industries We Serve</h1>
          </div>
          <div class="row g-4">
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/1. Tableware.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Tableware</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/2. Sanitaryware.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Sanitaryware</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/3. Tiles.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Tiles</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/4. Insulator.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Insulator</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/5. Pottery.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Pottery</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/6. Opal Glass Ware.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Opal Glass Ware</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/7. Glass Ware.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Glass Ware</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/8. Sheet Glass.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Sheet Glass</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/9. Metallurgy & Steel.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Metallurgy & Steel</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/10. Paint.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Paint</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/11. Paper.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Paper</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/12. Screen Printing.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Screen Printing</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/13. Footwear.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Footwear</h4>
                      </div>
                  </div>
              </div>
              <div class="col-md-2 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/Industries We Serve/14. Leather.png" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Leather</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
  <!-- old Industries We Serve  End -->

  <!-- Our Hero Start -->
  <!-- <div class="container-xxl py-5">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Our Heroes</h1>
          </div>
          <div class="row g-4">
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item">
                      <div class="overflow-hidden position-relative">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/team-1.jpg" alt="">
                          <div class="team-social">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                      </div>
                      <div class="text-center border border-5 border-light border-top-0 p-4">
                          <h5 class="mb-0">Full Name</h5>
                          <small>Designation</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="team-item">
                      <div class="overflow-hidden position-relative">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/team-2.jpg" alt="">
                          <div class="team-social">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                      </div>
                      <div class="text-center border border-5 border-light border-top-0 p-4">
                          <h5 class="mb-0">Full Name</h5>
                          <small>Designation</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="team-item">
                      <div class="overflow-hidden position-relative">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/team-3.jpg" alt="">
                          <div class="team-social">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                      </div>
                      <div class="text-center border border-5 border-light border-top-0 p-4">
                          <h5 class="mb-0">Full Name</h5>
                          <small>Designation</small>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="team-item">
                      <div class="overflow-hidden position-relative">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/team-4.jpg" alt="">
                          <div class="team-social">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                          </div>
                      </div>
                      <div class="text-center border border-5 border-light border-top-0 p-4">
                          <h5 class="mb-0">Full Name</h5>
                          <small>Designation</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
  <!-- Our Hero End -->

  <!-- Lets Connect Start -->
  <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
      <div class="container quote px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100 h-100" src="{{asset('frontend')}}/img/quote.jpg" style="object-fit: cover;" alt="">
                  </div>
              </div>
              <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                  <div class="p-lg-5 pe-lg-0">
                      <div class="section-title text-start">
                          <h1 class="display-5 mb-4">Let's connect!</h1>
                      </div>
                      <p class="mb-4 pb-2">We value your input and are here to address any questions or concerns you may have. Whether you're interested in our services, have feedback to share, or simply want to say hello, we're eager to hear from you.</p>
                      <form>
                          <div class="row g-3">
                              <div class="col-12 col-sm-6">
                                  <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                              </div>
                              <div class="col-12 col-sm-6">
                                  <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                              </div>
                              <div class="col-12 col-sm-6">
                                  <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                              </div>
                              <div class="col-12 col-sm-6">
                                  <input type="text" class="form-control border-0" placeholder="Subject" style="height: 55px;">
                              </div>
                              <div class="col-12">
                                  <textarea class="form-control border-0" placeholder="Your Special Note/Message"></textarea>
                              </div>
                              <div class="col-12">
                                  <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Lets Connect End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Testimonial</h1>
          </div>
          <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset('frontend')}}/img/testimonial-1.jpg" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                      <h5 class="mb-1">Client Name</h5>
                      <span class="fst-italic">Profession</span>
                  </div>
              </div>
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset('frontend')}}/img/testimonial-2.jpg" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                      <h5 class="mb-1">Client Name</h5>
                      <span class="fst-italic">Profession</span>
                  </div>
              </div>
              <div class="testimonial-item text-center">
                  <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{asset('frontend')}}/img/testimonial-3.jpg" style="width: 90px; height: 90px;">
                  <div class="testimonial-text text-center p-4">
                      <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                      <h5 class="mb-1">Client Name</h5>
                      <span class="fst-italic">Profession</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonial End -->

  <!-- News/Events Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="display-5 mb-5">Latest News & Events</h1>
          </div>
          <div class="row g-4"> 
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/News & Event/3. Asean Ceramics 2023, Vietnam/Asean Ceramics 2023_01.jpg" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Asean Ceramics 2023</h4>
                          <small>The 7th ASEAN Ceramic 2023, Southeast Asia's leading international exhibition of machinery, technology and materials for manufacturing white-ware, heavy clay, bricks and advanced ceramics</small><hr>
                          <a class="fw-medium" href="newseventdetailsaseanceramics.html">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/News & Event/2. Ceramics China 2023, China/Ceramics China 2023_01.jpg" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Ceramics China 2023</h4>
                          <small>The exhibition devoted to technology and materials for the ceramic industry, organized by Unifair Exhibition Service Ltd and sponsored by China Ceramic Industrial Association.</small><hr>
                          <a class="fw-medium" href="newseventdetailsceramicschina.html">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <img class="img-fluid" src="{{asset('frontend')}}/img/News & Event/1. PaperTech Expo 2023, Bangladesh/PaperTech Expo 2023_01.jpg" alt="">
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">PaperTech Expo 2023</h4>
                          <small>PAPERTECH is the series of International exhibitions on the Pulp and Paper Industry and is held in Dhaka, Bangladesh</small><hr>
                          <a class="fw-medium" href="newseventdetailspaperrechexpo.html">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- News/Events End -->

@endsection
