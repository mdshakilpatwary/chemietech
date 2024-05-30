<?php
$siteInfoData = siteInfoData();
use App\Models\MenuName;
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
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <!-- <h2 class="m-0 text-primary">WooDY</h2> -->
        <img src="{{asset('frontend/')}}img/logo/CHEMIE TECH 02.png" alt="" style="height: inherit;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="associationmembership.html" class="dropdown-item">Association & Membership</a>
                    <a href="certification.html" class="dropdown-item">Certification</a>
                    <!-- <a href="team.html" class="dropdown-item">Our Team</a> -->
                    <a href="principal.html" class="dropdown-item">Our Principal</a>
                    <a href="client.html" class="dropdown-item">Our Client</a>
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
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Products</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="ceramic.html" class="dropdown-item">Ceramic</a>
                    <a href="glass.html" class="dropdown-item">Glass</a>
                    <a href="#" class="dropdown-item">Metallurgy & Steel</a>
                    <a href="paintadhesive.html" class="dropdown-item">Paint & Adhesive</a>
                    <a href="leatherfootwearrubber.html" class="dropdown-item">Leather, Footwear & Rubber</a>
                    <a href="#" class="dropdown-item">Pulp, Paper & Tissue</a>
                    <a href="#" class="dropdown-item">Screen Printing</a>
                </div>
            </div>
            <a href="newsevents.html" class="nav-item nav-link">News & Events</a>
            <a href="careers.html" class="nav-item nav-link">Careers</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
    </div>
</nav>
<!-- Navbar End -->