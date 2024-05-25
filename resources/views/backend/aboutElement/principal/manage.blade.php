@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1> Our Principal Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Principal</li>
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
                <h5 class="card-title">All Principal item </h5>
                <a href="{{route('about.principal')}}" class="btn btn-sm btn-success">Add principal</a>
  
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
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($principals)>0)
                                   @foreach($principals as $principal)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$principal->title}}</td>
                                       <td>
                                        @if($principal->url == null)
                                        <span>Empty</span>
                                        @else
                                        <a href="{{$principal->url}}" target="blank">click</a>
                                        @endif
                                       </td>
                                       <td>
                                           <img src="{{asset($principal->image)}}" alt="" style="width: 120px; height: 60px;">
                                       </td>
                                       <td >
                                        @if($principal->status == 1)
                                        <a href="{{route('about.principal.status',$principal->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('about.principal.status',$principal->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                         <a href="{{route('about.principal.delete',$principal->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <a href="{{route('about.principal.edit',$principal->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Principal Added Here</td>
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