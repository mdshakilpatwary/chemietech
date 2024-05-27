
@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>About Client</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">About</li>
        <li class="breadcrumb-item">Client</li>
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
                <h5 class="card-title">Client Info Add</h5>
                <!-- Client category trigger modal -->
<div style="text-align: right">
  <button type="button" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Client Category
  </button>
</div>

                  <!-- insert Form Elements -->
                        <form method="POST" action="{{route('about.client.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @csrf
                            <div class="row mb-3">
                            
                            <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 col-12 col-sm-12">
        
                                
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 col-lg12 col-12 col-sm-12">
                                        <div class="form-group mb-3">
                                          <label class="col-form-label" >Select Client Category</label>
                                          <select name="category" id="" class="form-control">
                                            <option value="" selected disabled> -----Select-----</option>
                                            @foreach ($clientCats as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                
                                            @endforeach
                                          </select>
                                          @error('category')
                                          <p class="text-danger">{{$message}}</p>                
                                          @enderror
                                        </div>
                                      
                                      <div class="form-group mb-3">
                                        <label for="inputNumber" class=" col-form-label">Client Logo Image </label>
                                        <img src="" alt="" class="change_image mb-2" style="width: 150px; height: 100px; display:block;">
                                        <input class="form-control file_image" type="file" id="formFile" name="image" required>
                                        <div class="invalid-feedback">Please input Client Logo image</div>
                                        @error('image')
                                        <p class="text-danger">{{$message}}</p> 
                                        @enderror
                                      </div> 
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="submit_button_align" style="text-align: right;">
                                    <button type="submit" class="btn btn-success btn-lg">Add</button>
                                  </div>        
                            </div>
                            
                        </div>
        
        
                        </form>

  
              </div>
            </div>
  
          </div>
    </div>




<!--Client Category Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Client Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form method="POST" action="{{route('about.clientCategory.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
        @csrf
      <div class="modal-body">
        <div class="form-group pb-3">
          <label for="">Client Category Name</label>
          <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" required>
          <div class="invalid-feedback">Please input Category Name</div>

                @error('name')
                  <p class="text-danger">{{$message}}</p>
              @enderror
          </div>
      </div>
      <div class="modal-footer">
        <span type="" class="btn btn-secondary" data-bs-dismiss="modal">Close</span>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
      
    
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