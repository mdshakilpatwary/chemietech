@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Product Subcategory Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">Sub-Category</li>
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
                <h5 class="card-title">All Product Sub Category </h5>
                <a href="{{route('subcategory')}}" class="btn btn-sm btn-success">Add</a>
  
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
                                        <th>Sub Category Name</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($subcategories)>0)
                                   @foreach($subcategories as $subcategory)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$subcategory->name}}</td>
                                       <td>{{$subcategory->category->name}}</td>         
                                       <td >
                                        @if($subcategory->status == 1)
                                        <a href="{{route('subcategory.status',$subcategory->id)}}" class="btn btn-sm btn-outline-success">Active</a>
                                        @else
                                        <a href="{{route('subcategory.status',$subcategory->id)}}" class="btn btn-sm btn-outline-warning">Inactive</a>
                                        @endif
                                       </td>
                                       <td >
                                           <a href="{{route('subcategory.edit',$subcategory->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                           <a href="{{route('subcategory.delete',$subcategory->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No Product added here</td>
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