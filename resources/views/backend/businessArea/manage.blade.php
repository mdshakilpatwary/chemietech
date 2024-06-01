@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Business Area Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Business Area</li>
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
                <h5 class="card-title">All Business Area Page Information </h5>
                <a href="{{route('businessArea')}}" class="btn btn-sm btn-success">Add</a>
  
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
                                        <th>Page</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($businessAreas)>0)
                                   @foreach($businessAreas as $businessArea)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td> 
                                        @if($businessArea->type == 1) 
                                        <span>Foreign Partner</span>
                                        @elseif($businessArea->type == 2)
                                        <span>Stock of Supply</span>
                                       
                                        @elseif($businessArea->type == 3) 
                                        <span>Solution of Consultancy</span?>

                                        @endif                                     
                                       </td>
                                       <td>{{$businessArea->title}}</td>
                                       <td>{!!$businessArea->description!!}</td>
                                       <td >
                                        @if($businessArea->status == 1)
                                        <a href="{{route('businessArea.status',$businessArea->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('businessArea.status',$businessArea->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                           <a href="{{route('businessArea.delete',$businessArea->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                           <a href="{{route('businessArea.edit',$businessArea->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Business Area data added here</td>
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