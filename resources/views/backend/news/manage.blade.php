@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>News Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">News Event</li>
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
                <h5 class="card-title">All News Event </h5>
                <a href="{{route('news')}}" class="btn btn-sm btn-success">Add</a>
  
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
                                        <th>News title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($newsevents)>0)
                                   @foreach($newsevents as $news)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$news->title}}</td>
                                       <td>{!!$news->description!!}</td>
                                       <td>
                                           <img src="{{asset($news->image)}}" alt="" style="width: 120px; height: 60px;">
                                       </td>
                                       <td >
                                        @if($news->status == 1)
                                        <a href="{{route('news.status',$news->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('news.status',$news->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                         <a href="{{route('news.delete',$news->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <a href="{{route('news.edit',$news->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No News Event Added Here</td>
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