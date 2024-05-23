@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Add Product Sub Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Sub Category</li>
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
                <h5 class="card-title">Update Sub Category</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('subcategory.update',$subcategory->id)}}" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
                        <div class="form-group mb-3">
                          <label class="col-form-label" >Select Category</label>
                          <select name="category" id="" class="form-control">
                            <option value="" selected disabled> -----Select-----</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{ $subcategory->category->id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                
                            @endforeach
                          </select>
                          @error('category')
                          <p class="text-danger">{{$message}}</p>                
                          @enderror
                      </div>
                      <div class="form-group mb-3">
                          <label class="col-form-label">Sub Category Name</label>
                          <input type="text" name="name" class="form-control" id="" value="{{$subcategory->name}}">
                          @error('name')
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