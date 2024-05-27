@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1> Our Management Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Management</li>
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
                <h5 class="card-title">All Management item </h5>
                <a href="{{route('about.management')}}" class="btn btn-sm btn-success">Add Management</a>
  
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
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Facebook</th>
                                        <th>Instagram</th>
                                        <th>Twitter</th>
                                        <th>Linkedin</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($managements)>0)
                                   @foreach($managements as $management)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$management->name}}</td>
                                       <td>{{$management->title}}</td>
                                      
                                       <td>
                                           <img src="{{asset($management->image)}}" alt="" style="width: 120px; height: 60px;">
                                       </td>
                                       <td>
                                        @if($management->facebook == null)
                                        <span>Empty</span>
                                        @else
                                        <a href="{{$management->facebook}}" target="blank">click</a>
                                        @endif
                                       </td>
                                       <td>
                                        @if($management->instagram == null)
                                        <span>Empty</span>
                                        @else
                                        <a href="{{$management->instagram}}" target="blank">click</a>
                                        @endif
                                       </td>
                                       <td>
                                        @if($management->twitter == null)
                                        <span>Empty</span>
                                        @else
                                        <a href="{{$management->twitter}}" target="blank">click</a>
                                        @endif
                                       </td>
                                       <td>
                                        @if($management->linkedin == null)
                                        <span>Empty</span>
                                        @else
                                        <a href="{{$management->linkedin}}" target="blank">click</a>
                                        @endif
                                       </td>
                                       <td >
                                        @if($management->status == 1)
                                        <a href="{{route('about.management.status',$management->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('about.management.status',$management->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                         <a href="{{route('about.management.delete',$management->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <a href="{{route('about.management.edit',$management->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="10" class="text-center"> No Management Added Here</td>
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