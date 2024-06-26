<?php
$siteInfo = siteInfoData();
?>
@include('backend.includes.head')

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{asset('')}}" alt="">
                  <span class="d-none d-lg-block">{{$siteInfo->name}}</span>
                </a>
              </div>
              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                      @error('email')
                      <p class="text-danger ">{{$message}}</p>
                      @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" value="{{old('password')}}" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"><a href="{{route('forgate.password')}}">Forget Password</a></p>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>

                  </form>
                 

                </div>
              </div>

              <div class="copyright">
                &copy; Copyright <strong><span>{{$siteInfo->name}}</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Develop by <a href="https://binarytobyte.com">BinaryBite</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('backend.includes.script')