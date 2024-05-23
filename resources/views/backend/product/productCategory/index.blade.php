@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Add Product Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Product</li>
        <li class="breadcrumb-item active">Category</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Product Category</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="col-form-label">Category Name</label>
                            <input type="text" name="name" class="form-control" id="" value="{{old('name')}}">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>                
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class=" col-form-label">Category Image</label>
                            <input class="form-control file_image" type="file" name="image" >
                            @error('image')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label class="col-form-label">Description</label>
                          <textarea name="description" class="form-control" id="" cols="3" rows="5">{{old('description')}}</textarea>
                          @error('description')
                          <p class="text-danger">{{$message}}</p>                
                          @enderror
                      </div>
                        <div class="submit_button_align" style="text-align: right;">
                          <button type="submit" class="btn btn-success btn-lg">Add</button>
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