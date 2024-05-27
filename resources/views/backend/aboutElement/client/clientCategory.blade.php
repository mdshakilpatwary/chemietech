@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1> Client Category Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Client Category</li>
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
                <h5 class="card-title">All Client Category item </h5>
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
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($clientCats)>0)
                                   @foreach($clientCats as $clientCat)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$clientCat->name}}</td>
                                       
                                       <td >
                                        @if($clientCat->status == 1)
                                        <a href="{{route('about.clientCat.status',$clientCat->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('about.clientCat.status',$clientCat->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                         <a href="{{route('about.clientCat.delete',$clientCat->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                         <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$clientCat->id}}">
                                            Edit
                                          </button>
                                       </td>
                                   </tr>

      <!--Client Category Modal -->
<div class="modal fade" id="exampleModal_{{$clientCat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Client Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <form method="POST" action="{{route('about.clientCategory.update', $clientCat->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate="">
          @csrf
        <div class="modal-body">
          <div class="form-group pb-3">
            <label for="">Client Category Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{$clientCat->name}}" required>
            <div class="invalid-feedback">Please input Category Name</div>
  
                  @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
          <span type="" class="btn btn-secondary" data-bs-dismiss="modal">Close</span>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
        
      
      </div>
    </div>
  </div>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Client Category Added Here</td>
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