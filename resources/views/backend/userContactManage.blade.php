@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>User Contact Info Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item ">User</li>
        <li class="breadcrumb-item ">Contact</li>
        <li class="breadcrumb-item ">Info</li>
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
                <h5 class="card-title">All User Contact Information </h5>
  
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @if(count($userContacts)>0)
                                   @foreach($userContacts as $userContact)
        
                                   <tr >
                                       <td>{{$sl++}}</td>
                                       <td>{{$userContact->name}}</td>
                                       <td>
                                        <a href="mailto:{{$userContact->email}}">{{$userContact->email}}</a></td>
                                       <td>{{$userContact->phone}}</td>
                                       <td>{{$userContact->subject}}</td>
                                       <td>{{$userContact->message}}</td>
                                       <td>{{$userContact->created_at->format('d/m/Y h:i A')}}</td>

                                       <td >
                                           <a href="{{route('user.contact.delete',$userContact->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>                                       </td>
                                   </tr>
                               @endforeach
                               @else
                                   <tr>
                                    <td colspan="9" class="text-center"> No User Contact Data Added Here</td>
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