<?php
$siteInfoData = siteInfoData();
?>


    <!-- Footer Start -->
    <div class="container-fluid footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-4 col-md-6">
                  <h4 class="mb-4">Contact Us</h4><hr>
                  <p class="mb-2 text-dark"><i class="fa fa-phone-square me-3 footer-icon-color"></i>{{$siteInfoData->phone_1}}</p>
                  <p class="mb-2 text-dark"><i class="fa fa-mobile-alt me-3 footer-icon-color"></i>{{$siteInfoData->phone_2}} </p>
                  <p class="mb-2 text-dark"><i class="fa fa-envelope me-3 footer-icon-color"></i>{{$siteInfoData->email}}</p>
                  <p class="mb-2 text-dark"><i class="fa fa-envelope me-3 footer-icon-color"></i>{{$siteInfoData->email_2}}</p>
                  <p class="mb-2 text-dark"><i class="fa fa-envelope me-3 footer-icon-color"></i>{{$siteInfoData->email_3}}</p>
                  <p class="mb-2 text-dark"><i class="fa fa-building me-3 footer-icon-color"></i> <b> Corporate Office: </b>{{$siteInfoData->address_1}}</p> 
                  <p class="mb-2 text-dark"><i class="fa fa-warehouse me-3 footer-icon-color"></i><b> Warehouse 1: </b>{{$siteInfoData->warehouse_1}}</p> 
                  <p class="mb-2 text-dark"><i class="fa fa-warehouse me-3 footer-icon-color"></i><b> Warehouse 2: </b>{{$siteInfoData->warehouse_2}}</p> 
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class=" mb-4">About Chemie Tech</h4><hr>
                  <a class="btn btn-link text-dark" href="associationmembership.html">Association & Membership</a>
                  <a class="btn btn-link text-dark" href="certification.html">Certification</a>
                  <a class="btn btn-link text-dark" href="team.html">Our Team</a>
                  <a class="btn btn-link text-dark" href="client.html">Our Client</a>
                  <a class="btn btn-link text-dark" href="principal.html">Our Principal</a>
                  <a class="btn btn-link text-dark" href="management.html">Our Management</a>
              </div>
              <div class="col-lg-2 col-md-6">
                  <h4 class=" mb-4">Quick Links</h4><hr>
                  <a class="btn btn-link text-dark" href="">About Us</a>
                  <a class="btn btn-link text-dark" href="contact.html">Contact Us</a>
                  <a class="btn btn-link text-dark" href="">Our Products</a>
                  <a class="btn btn-link text-dark" href="">Terms & Condition</a>
                  <a class="btn btn-link text-dark" href="">Privacy Policy</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="mb-4">Newsletter</h4><hr>
                  <p>Stay informed and connected with the latest updates by subscribing to our Newsletter & Events today!</p>
                  <div class="position-relative mx-auto" style="max-width: 400px;">
                      <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Save</button>
                  </div>
                  <hr>
                  <div class="d-flex pt-2">
                      <p class="text-dark">Follow us : &nbsp;</p>
                      <a class="btn btn-outline-light btn-social" href="{{$siteInfoData->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-light btn-social" href="{{$siteInfoData->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      <a class="btn btn-outline-light btn-social" href="{{$siteInfoData->map}}" target="_blank"><i class="fab fa fa-map-marker-alt"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="container bg-white" >
          <div class="copyright">
              <div class="row">
                  <div class="col-md-12  text-md-start mb-3 mb-md-0">
                      <p class="text-center text-dark">
                          &copy; All Rights Reserved by <b>CHEMIE TECH</b> | Develop By:  <strong><a href="https://binarytobyte.com" ">Binary Byte</a></strong>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
