@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Update Banner Slider</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Banner Slider</li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Update Banner Slider</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('bannerSlider.update',$bannerSlider->id)}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="col-form-label">Banner Title</label>
                            <input type="text" name="title" class="form-control" id="" value="{{$bannerSlider->title}}">
                            @error('title')
                            <p class="text-danger">{{$message}}</p>                
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="col-form-label">Sub Title</label>
                            <input type="text" name="sub_title" class="form-control" id="" value="{{$bannerSlider->sub_title}}">
                            @error('sub_title')
                            <p class="text-danger">{{$message}}</p>                
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class=" col-form-label">Slider Image</label>
                            <input class="form-control file_image" type="file" name="image" >
                            <img src="{{asset($bannerSlider->image)}}" alt="" style="width: 200px; height:150px; margin-top:5px;">
                            @error('image')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label class="col-form-label">Short Text</label>
                          <textarea name="short_text" class="form-control" id="" cols="3" rows="5">{{$bannerSlider->short_text}}</textarea>
                          @error('short_text')
                          <p class="text-danger">{{$message}}</p>                
                          @enderror
                      </div>
                        <div class="submit_button_align" style="text-align: right;">
                          <button type="submit" class="btn btn-success btn-lg">Update</button>
                        </div>                        
                    </div>
                    
                  </div>

  
                </form>
                <!-- End header Form Elements -->
  
              </div>
            </div>
  
          </div>
    </div>
  </section>
    
@endsection