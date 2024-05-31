<?php
$siteInfoData = siteInfoData();
use App\Models\ProductCategory;
$productCats =ProductCategory::where('status',1)->orderBy('id','desc')->get();
?>
  <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-8 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>{{$siteInfoData->address_1}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>{{$siteInfoData->time}}</small>
            </div>
        </div>
        <div class="col-lg-4 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>{{$siteInfoData->phone_1}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="{{$siteInfoData->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="{{$siteInfoData->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="{{$siteInfoData->map}}" target="_blank"><i class="fab fa fa-map-marker-alt"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{route('homepage')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      @if($siteInfoData->logo != null)
      <img src="{{asset('uploads/siteinfo/'.$siteInfoData->logo)}}" alt="" style="height: inherit;">
      @else
     <h2 class="m-0 text-primary">{{$siteInfoData->name}}</h2>
       @endif
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('homepage')}}" class="nav-item nav-link {{ Route::is('homepage*')? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Route::is('about.membership.page*')||Route::is('about.certification.page*')||Route::is('about.principal.page*')||Route::is('about.client.page*')? 'active' : '' }}" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{route('about.membership.page')}}" class="dropdown-item {{ Route::is('about.membership.page*')? 'active' : '' }}">Association & Membership</a>
                    <a href="{{route('about.certification.page')}}" class="dropdown-item {{ Route::is('about.certification.page*')? 'active' : '' }}">Certification</a>
                    <!-- <a href="team.html" class="dropdown-item">Our Team</a> -->
                    <a href="{{route('about.principal.page')}}" class="dropdown-item {{ Route::is('about.principal.page*')? 'active' : '' }}">Our Principal</a>
                    <a href="{{route('about.client.page')}}" class="dropdown-item {{ Route::is('about.client.page*')? 'active' : '' }}">Our Client</a>
                    <!-- <a href="management.html" class="dropdown-item">Our Management</a> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Business Area</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="representationofforeignpartner.html" class="dropdown-item">Representation of Foreign Partner</a>
                    <a href="importforlocalstockofsupply.html" class="dropdown-item">Import for Local Stock and Supply</a>
                    <a href="technicalsolutionofconsultancy.html" class="dropdown-item">Technical Solution and Consultancy</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Route::is('product.page*')? 'active' : '' }}" data-bs-toggle="dropdown">Our Products</a>
                <div class="dropdown-menu fade-up m-0">
                    @if(count($productCats) > 0)
                    @foreach($productCats as $productCat)
                        <a href="{{route('product.page',$productCat->id)}}" class="dropdown-item {{ request()->routeIs('product.page*') && request()->route('id') == $productCat->id ? 'active' : '' }}">{{$productCat->name}}</a>
                    @endforeach
                    @endif
                </div>
            </div>
            <a href="{{route('news.page')}}" class="nav-item nav-link {{Route::is('news.page*')|| Route::is('single.news.page*')? 'active': ''}}">News & Events</a>
            <a href="{{route('career.page')}}" class="nav-item nav-link {{Route::is('career.page*')? 'active': ''}}">Careers</a>
            <a href="{{route('contact.page')}}" class="nav-item nav-link {{Route::is('contact.page*')? 'active': ''}}">Contact</a>
        </div>
        <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
    </div>
</nav>
<!-- Navbar End -->