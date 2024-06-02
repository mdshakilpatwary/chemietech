@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>News Letter Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">News letter</li>
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
                <h5 class="card-title">All news letter </h5>
  
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
                                        <th>Email</th>
                                        <th>Date & Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($newsletters)>0)
                                   @foreach($newsletters as $newsletter)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td><a href="mailto:{{$newsletter->email}}">{{$newsletter->email}}</a></td>
                                       <td>{{$newsletter->created_at->format('d/m/Y h:i A')}}</td>
                                        <td>
                                            Active
                                        </td>
                                       <td >
                                           <a href="{{route('news.letter.delete',$newsletter->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="5" class="text-center"> Data not found</td>
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