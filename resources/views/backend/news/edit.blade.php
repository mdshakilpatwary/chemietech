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
    <h1>News Event Update</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">News</li>
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
                <h5 class="card-title">News Update</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('news.update',$news->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                      
                  <div class="offset-md-1 offset-lg-1 col-md-10 col-lg-10 col-12 col-sm-12">
                    <div class="form-group mb-3">
                      <label for="inputText" class="col-form-label">News Title</label>
                      <input type="text" class="form-control" name="title" value="{{$news->title}}">
                      <div class="invalid-feedback">Please input News Title</div>
                      @error('title')
                      <p class="text-danger">{{$message}}</p>           
                      @enderror
                  </div>
                  
                  <div class="form-group mb-3">
                      <label for="inputText" class="col-form-label"> Description </label>
                      <textarea class="form-control" cols="5" rows="5" name="description"  id="editor" >{!!$news->description!!}</textarea>                            
                      <div class="invalid-feedback">Please input  description</div>
                      @error('description')
                      <p class="text-danger">{{$message}}</p> 
                      @enderror
                  </div>

                    <div class="form-group mb-3">
                      <label for="inputNumber" class=" col-form-label">Image <span style="color: #6b6868">(resolution 400x350 )</span></label>
                      <img src="{{asset($news->image)}}" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                      <input class="form-control p_file_image" type="file" id="formFile" name="image">
                      @error('image')
                      <p class="text-danger">{{$message}}</p> 
                      @enderror
                    </div>                          
                    <div class="form-group mb-3">
                      <label for="inputNumber" class=" col-form-label">Select Group Image <span style="color: #6b6868">(resolution 400x350 )</span></label>
                      <div>
                        @foreach($gImages as $gimage)
                      <span style="position: relative;">
                        <img src="{{asset($gimage->group_image)}}" alt="" class="g_change_image mb-2 d-inline" style="width: 150px; height: 100px; display:block;">
                      <a href="{{route('gimage.delete',$gimage->id)}}" class="btn btn-outline-danger bx-border-circle" style="position: absolute; z-index: 111; top: -40px; right: 0;"><i class="bi bi-x"></i></a>
                      </span>
                      @endforeach
                      </div>
                      <input class="form-control g_file_image" type="file" id="formFile" name="group_image[]" multiple >
                      @error('group_image')
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
@section('script_link')
<script>
  //  onchange image file part
$(document).ready(function(){
$('.p_file_image').change('.p_change_image',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image').files[0];
  reader.onload =function(e){
      $(".p_change_image").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});

// ***** 
$('.p_file_image_1').change('.p_change_image_1',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_1').files[0];
  reader.onload =function(e){
      $(".p_change_image_1").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_2').change('.p_change_image_2',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_2').files[0];
  reader.onload =function(e){
      $(".p_change_image_2").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_3').change('.p_change_image_3',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_3').files[0];
  reader.onload =function(e){
      $(".p_change_image_3").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_4').change('.p_change_image_4',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_4').files[0];
  reader.onload =function(e){
      $(".p_change_image_4").attr('src',e.target.result);
  }
  reader.readAsDataURL(file);
});
// ***** 
$('.p_file_image_5').change('.p_change_image_5',function(){
  let reader =new FileReader();
  let file =document.querySelector('.p_file_image_5').files[0];
  reader.onload =function(e){
      $(".p_change_image_5").attr('src',e.target.result);
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