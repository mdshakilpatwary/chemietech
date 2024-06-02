@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Banner Slider Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Banner Slider</li>
        <li class="breadcrumb-item active">Manage</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xl-12 col-12 col-sm-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">All Banner Sliders </h5>
                <a href="{{route('bannerSlider')}}" class="btn btn-sm btn-success">Add</a>
  
                <!-- Table with stripped rows -->
                    
                    <div class="row">
                        <div class="col-md-12 col-xl-12 col-12 colsm-12" style="width: 100%; overflow-x: scroll;">
                            <table class="table table datatable">
                                @php
                                $sl = 1;
                                @endphp
                                <thead>
                                    <tr>
                                        <th>#Sl</th>
                                        <th>Banner Title</th>
                                        <th>Sub Title</th>
                                        <th>Short Text</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($bannerSliders)>0)
                                   @foreach($bannerSliders as $bannerSlider)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{Str::words($bannerSlider->title,4,'...')}}</td>
                                       <td>{{Str::words($bannerSlider->sub_title,4,'...')}}</td>
                                       <td>{{Str::words($bannerSlider->short_text,4,'...')}}</td>
                                       
                                       <td>
                                           <img src="{{asset($bannerSlider->image)}}" alt=""  style="width: 120px; height: 60px;">
                                       </td>
                                       <td >
                                        @if($bannerSlider->status == 1)
                                        <a href="{{route('bannerSlider.status',$bannerSlider->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('bannerSlider.status',$bannerSlider->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                           <a href="{{route('bannerSlider.edit',$bannerSlider->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                           <a href="{{route('bannerSlider.delete',$bannerSlider->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Banner Slider Added Here</td>
                                   </tr>
                               @endif
        
                                </tbody>
                            </table>
                        </div>
                    </div>
             
  

                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
    </div>
  </section>
    
@endsection