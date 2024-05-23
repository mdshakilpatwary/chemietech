@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Account Settings</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Settings</li>
        <li class="breadcrumb-item active">Site Info</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">

      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

              <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" tabindex="-1" role="tab">Edit Site Info</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                <h5 class="card-title">Site Informations</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Site Logo</div>
                  @if($siteInfo->logo != '')
                    <div class="col-lg-9 col-md-8">
                        <img src="{{asset('uploads/siteinfo/'.$siteInfo->logo) }}" alt="Profile" class=" " style="width: 200px; height: 100px;">
                    </div>
                  @else
                    <div class="col-lg-9 col-md-8"><strong>Empty Logo Image</strong></div>
                  @endif
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Site Name</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->name}}</div>
                </div>
                

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->email}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email 02</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->email_2}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email 03</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->email_3}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Number 01</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->phone_1}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Number 02</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->phone_2}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Time</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->time}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Address Line</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->address_1}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Warehouse 01</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->warehouse_1}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Warehouse 02</div>
                  <div class="col-lg-9 col-md-8">{{$siteInfo->warehouse_2}}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label"> Facebook</div>
                  <div class="col-lg-9 col-md-8"><a href="{{$siteInfo->facebook}}" target="blank"><i class="bi bi-facebook"></i>{{$siteInfo->facebook}}</a></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Linkedin</div>
                  <div class="col-lg-9 col-md-8"><a href="{{$siteInfo->linkedin}}" target="blank"><i class="bi bi-linkedin"></i>{{$siteInfo->linkedin}}</a></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label"> Map</div>
                  <div class="col-lg-9 col-md-8"><a href="{{$siteInfo->map}}" target="blank"><i class="bi bi-geo-alt"></i>{{$siteInfo->map}}</a></div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                <!-- Profile Edit Form -->
                @php
                    $typeName = 'active_siteInfo';
                @endphp
                <form method="POST" action="{{route('site.info.update', $typeName)}}" enctype="multipart/form-data">
                  @csrf
                    <div class="row mb-3">
                    <label for="image" class="col-md-4 col-lg-3 col-form-label">Site Logo</label>
                    <div class="col-md-8 col-lg-9">
                        @if($siteInfo->logo != '')
                        <img src="{{asset('uploads/siteinfo/'.$siteInfo->logo) }}" alt="Profile" class="change_image" style="width: 200px; height: 100px; margin-bottom: 10px;">
                        @else
                        <img src="" alt="" class="change_image" style="width: 200px; height: 100px; margin-bottom: 10px;">
                        @endif
                        <input type="file" name="logo" class="file_image d-block mt-2">
                        @error('logo')
                            <p class="text-danger">{{$message}}</p>
                            
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Site Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" type="text" class="form-control" id="name" value="{{$siteInfo->name}}">
                      @error('name')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="email" value="{{$siteInfo->email}}">
                      @error('email')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email_2" class="col-md-4 col-lg-3 col-form-label">Email 02 (Optional)</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email_2" type="email" class="form-control" id="email_2" value="{{$siteInfo->email_2}}">
                      @error('email_2')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email_3" class="col-md-4 col-lg-3 col-form-label">Email 03 (Optional)</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email_3" type="email" class="form-control" id="email_3" value="{{$siteInfo->email_3}}">
                      @error('email_3')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="phone_1" class="col-md-4 col-lg-3 col-form-label">Phone 01</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone_1" type="text" class="form-control" id="phone_1" value="{{$siteInfo->phone_1}}">
                        @error('phone_1')
                            <p class="text-danger">{{$message}}</p>    
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone 02 (Optional)</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone_2" type="text" class="form-control" id="phone" value="{{$siteInfo->phone_2}}">
                      @error('phone_2')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="address_1" class="col-md-4 col-lg-3 col-form-label">Address Line</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="address_1" type="text" class="form-control" id="address_1" value="{{$siteInfo->address_1}}">
                        @error('address_1')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="warehouse_1" class="col-md-4 col-lg-3 col-form-label">Warehouse 01</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="warehouse_1" type="text" class="form-control" id="warehouse_1" value="{{$siteInfo->warehouse_1}}">
                      @error('warehouse_1')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="warehouse_2" class="col-md-4 col-lg-3 col-form-label">Warehouse 02(Optional)</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="warehouse_2" type="text" class="form-control" id="warehouse_2" value="{{$siteInfo->warehouse_2}}">
                      @error('warehouse_2')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="facebook" class="col-md-4 col-lg-3 col-form-label">Facebook link</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="facebook" type="text" class="form-control" id="facebook" value="{{$siteInfo->facebook}}">
                      @error('facebook')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin link</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="linkedin" type="text" class="form-control" id="linkedin" value="{{$siteInfo->linkedin}}">
                      @error('linkedin')
                            <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="map" class="col-md-4 col-lg-3 col-form-label">Map link</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="map" type="text" class="form-control" id="map" value="{{$siteInfo->map}}">
                      @error('map')
                      <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="time" class="col-md-4 col-lg-3 col-form-label">Time</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="time" type="datetime" class="form-control" id="time" placeholder="Sat - Thu : 09.00 AM - 05.00 PM" value="{{$siteInfo->time}}">
                      @error('time')
                      <p class="text-danger">{{$message}}</p>    
                      @enderror
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>
    
@endsection