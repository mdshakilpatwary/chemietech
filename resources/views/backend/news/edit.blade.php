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
                    <div>
                      @foreach($gImages as $gimage)
                    <span style="position: relative;">
                      <img src="{{asset($gimage->group_image)}}" alt="" class="g_change_image mb-2 d-inline" style="width: 150px; height: 100px; display:block;">
                    <a href="{{route('gimage.delete',$gimage->id)}}" class="btn btn-outline-danger bx-border-circle" style="position: absolute; z-index: 111; top: -40px; right: 0;"><i class="bi bi-x"></i></a>
                    </span>
                    @endforeach
                    </div>
                    <table class="table" id="elementTable">
                      <tr class="row_one">

                          <td>
                              <div class="form-group">
                                  <label for="elementImage">Select Multiple Image <span style="color: #6b6868">(resolution 400x350)</span></label>
                                  <input type="file" name="group_image[]" class="form-control" multiple >
                                  <div class="invalid-feedback">Please input your news image</div>
                                  @error('group_image')
                                  <p class="text-danger">{{$message}}</p> 
                                  @enderror
                              </div>
                          </td>
                          <td class="">
                              <div style="display: flex; justify-content: center; align-items: center;   margin-top: 26px;">
                                  <span class="addElement btn btn-info btn-sm" style="font-size: 16px; padding: 1px 3px; margin: 0 1px;"><i class="addElement bi bi-plus-lg"></i></span>
                                  <span class="removeElement btn btn-secondary btn-sm" style="font-size: 16px; padding: 1px 3px; margin: 0;"><i class="removeElement bi bi-dash-lg"></i></span>
                              </div>
  
                          </td>
                      </tr>
                  
                  </table>                          

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
   document.addEventListener('DOMContentLoaded', function() {
    // Add event listener for "add" buttons
    document.getElementById('elementTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('addElement')) {
            var addButton = event.target;

            var row = addButton.closest('tr');
            var clone = row.cloneNode(true);

            // Clear input values in the cloned row
            clone.querySelectorAll('input[type="text"], input[type="hidden"]').forEach(function(input) {
                input.value = '';
            });

            // Reset file input value
            clone.querySelectorAll('input[type="file"]').forEach(function(input) {
                input.value = null;
                input.removeAttribute('required'); // Temporarily remove the required attribute
            });

            // Clear img src attribute in the cloned row
            clone.querySelectorAll('img').forEach(function(img) {
                img.src = ''; // or set a default placeholder image
            });

            // Append the cloned row after the current row
            row.parentNode.insertBefore(clone, row.nextSibling);

            // Reapply the required attribute to file input after a short delay
            setTimeout(function() {
                clone.querySelectorAll('input[type="file"]').forEach(function(input) {
                    input.setAttribute('required', ''); // Reapply the required attribute
                });
            }, 100);
        }
    });

    // Add event listener for "remove" buttons (delegated to the parent element)
    document.getElementById('elementTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('removeElement')) {
            var removeButton = event.target;
            var row = removeButton.closest('tr');

            // Check if the row being removed is not the first row
            if (row.previousElementSibling) {
                row.parentNode.removeChild(row);
            }
        }
    });
});
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