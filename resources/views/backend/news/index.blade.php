@extends('backend.master')

@section('style_link')
<style>
  .ck.ck-button.ck-off.ck-dropdown__button {
  display: none !important;
}
.ck.ck-button.ck-off.ck-file-dialog-button {
	display: none;
}
</style>
@endsection
@section('main_body_content_part')
<div class="pagetitle">
    <h1>News Event</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">News Event</li>
        <li class="breadcrumb-item active">Add</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">News Add</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('news.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
                @csrf
                  <div class="row mb-3">
                      
                      <div class="offset-md-1 offset-lg-1 col-md-10 col-lg-10 col-12 col-sm-12">
                       
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label">News Title</label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}" required>
                            <div class="invalid-feedback">Please input News Title</div>
                            @error('title')
                            <p class="text-danger">{{$message}}</p>           
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-form-label"> Description </label>
                            <textarea class="form-control" cols="5" rows="5" name="description"  id="editor" required>{{old('description')}}</textarea>                            
                            <div class="invalid-feedback">Please input  description</div>
                            @error('description')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                        </div>
      
                          <div class="form-group mb-3">
                            <label for="inputNumber" class=" col-form-label">Image <span style="color: #6b6868">(resolution 400x350 )</span></label>
                            <img src="" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                            <input class="form-control p_file_image" type="file" id="formFile" name="image" required>
                            <div class="invalid-feedback">Please input news image</div>
                            @error('image')
                            <p class="text-danger">{{$message}}</p> 
                            @enderror
                          </div>                          
                          <div class="form-group mb-3">
                            <label for="inputNumber" class=" col-form-label">Select Group Image <span style="color: #6b6868">(resolution 400x350 )</span></label>
                            <img src="" alt="" class="g_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                            <input class="form-control g_file_image" type="file" id="formFile" name="group_image[]" multiple required>
                            <div class="invalid-feedback">Please input news Group image</div>
                            @error('group_image')
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
@section('script_link')
<script>
  //  onchange image file part
$(document).ready(function(){
$('.g_file_image').change('.g_change_image',function(){
  let reader =new FileReader();
  let file =document.querySelector('.g_file_image').files[0];
  reader.onload =function(e){
      $(".g_change_image").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});


});
$(document).ready(function(){
$('.p_file_image').change('.p_change_image',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image').files[0];
  reader.onload =function(e){
      $(".p_change_image").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});


});

// editor 
$(document).ready(function(){
    ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});
});

</script>
@endsection