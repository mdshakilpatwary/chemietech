@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1> Client Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Client</li>
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
                <h5 class="card-title">All Client item </h5>
                <a href="{{route('about.clientCat.manage')}}" class="btn btn-sm btn-info">Client Category</a>
                <a href="{{route('about.client')}}" class="btn btn-sm btn-success">Add Client</a>
  
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
                                        <th>Client Category</th>
                                        <th>Logo Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($clients)>0)
                                   @foreach($clients as $client)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$client->clientcat->name}}</td>
                                       <td>
                                           <img src="{{asset($client->image)}}" alt="" style="width: 120px; height: 60px;">
                                       </td>
                                       <td >
                                        @if($client->status == 1)
                                        <a href="{{route('about.client.status',$client->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('about.client.status',$client->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                         <a href="{{route('about.client.delete',$client->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <a href="{{route('about.client.edit',$client->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Client Added Here</td>
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