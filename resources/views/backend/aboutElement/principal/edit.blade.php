
@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>About Principal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">About</li>
        <li class="breadcrumb-item">Principal</li>
        <li class="breadcrumb-item active">Info</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Principal Info Add</h5>
  

                  <!-- insert Form Elements -->
                        <form method="POST" action="{{route('about.principal.update',$principal->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @csrf
                            <div class="row mb-3">
                            
                            <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
        
                                
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-lg12 col-12 col-sm-12">
                                      <div class="form-group pb-3">
                                      <label for="">Title</label>
                                      <input type="text" name="title" id="" class="form-control" value="{{$principal->title}}" required>
                                            @error('title')
                                              <p class="text-danger">{{$message}}</p>
                                          @enderror
                                      </div>
                                      <div class="form-group pb-3">
                                        <label for="">Url <span style="color: #6b6868">(Optional )</span></label>
                                        <input type="text" name="url" id="" class="form-control" value="{{$principal->url}}">
                                              @error('url')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    <div class="form-group mb-3">
                                        <label for="inputNumber" class=" col-form-label">Image </span></label>
                                        <img src="{{asset($principal->image)}}" alt="" class="change_image mb-2" style="width: 150px; height: 100px; display:block;">
                                        <input class="form-control file_image" type="file" id="formFile" name="image" >
                                        <div class="invalid-feedback">Please input news image</div>
                                        @error('image')
                                        <p class="text-danger">{{$message}}</p> 
                                        @enderror
                                      </div> 
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="submit_button_align" style="text-align: right;">
                                    <button type="submit" class="btn btn-success btn-lg">Update</button>
                                  </div>        
                            </div>
                            
                        </div>
        
        
                        </form>

  
              </div>
            </div>
  
          </div>
    </div>



  
  </section>
    
  <script>


  //  onchange image file part
  $(document).ready(function(){
$('.file_image').change('.change_image',function(){
  let reader =new FileReader();
  let file =document.querySelector('.file_image').files[0];
  reader.onload =function(e){
      $(".change_image").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});


});


  </script>


@endsection