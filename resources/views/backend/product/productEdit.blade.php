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
    <h1>Product Update</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Product</li>
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
                <h5 class="card-title">Product Update</h5>
  
                <!-- General Form Elements -->
                <form method="POST" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                      
                  <div class="offset-md-1 offset-lg-1 col-md-10 col-lg-10 col-12 col-sm-12">
                   <div class="row">

                    <div class="col-md-6 col-xl-6 col-lg-6 col-12 col-sm-12">
                      <div class="form-group mb-3">
                        <label class="col-form-label" >Select Category</label>
                        <select name="category" id="" class="form-control" required>
                          <option value="" disabled> -----Select-----</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}" {{ $product->category->id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                              
                          @endforeach

                        </select>
                        <div class="invalid-feedback">Please Select product Category</div>
                        @error('category')
                        <p class="text-danger">{{$message}}</p>                
                        @enderror
                      </div>
                    
                    </div>
                    <div class="col-md-6 col-xl-6 col-lg-6 col-12 col-sm-12">
                      <div class="form-group mb-3">
                        <label class="col-form-label" >Select Sub Category</label>
                        <select name="subcategory" id="" class="form-control" required>
                          <option value="" disabled> -----Select-----</option>
                          @foreach ($subcategories as $subcategory)
                          <option value="{{$subcategory->id}}" {{ $product->category->id == $subcategory->id ? 'selected' : '' }}>{{$subcategory->name}}</option>
                              
                          @endforeach

                        </select>
                        @error('subcategory')
                        <p class="text-danger">{{$message}}</p>                
                        @enderror
                      </div>
                    
                    </div>


                   </div>
                    <div class="form-group mb-3">
                        <label for="inputText" class="col-form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}" >
                        @error('product_name')
                        <p class="text-danger">{{$message}}</p>           
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="inputText" class="col-form-label">Short Description </label>
                        <textarea class="form-control" cols="5" rows="5" name="description"  id="" >{{$product->description}}</textarea>                            
                        @error('description')
                        <p class="text-danger">{{$message}}</p> 
                        @enderror
                    </div>
  
                      <div class="form-group mb-3">
                        <label for="inputNumber" class=" col-form-label">Product Image <span style="color: #6b6868">(resolution 400x350 )</span></label>
                        <img src="{{asset($product->image)}}" alt="" class="p_change_image mb-2" style="width: 150px; height: 100px; display:block;">
                        <input class="form-control p_file_image" type="file" id="formFile" name="image">
                        @error('image')
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