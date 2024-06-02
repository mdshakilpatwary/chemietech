<?php
use App\Models\HomePageElement;
?>

@extends('backend.master')
@section('main_body_content_part')
<div class="pagetitle">
    <h1>Home Industrial</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Industrial</li>
        <li class="breadcrumb-item ">Element</li>
        <li class="breadcrumb-item active">Info</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
        <div class="offset-md-1 offset-lg-1 col-lg-10 col-12 col-md-10">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Home Industrial Element</h5>
                <a href="{{route('home.industrial.element')}}" class="btn btn-sm btn-success">Add</a>


                <!-- manage Elements -->
                    @php
                    $elements = HomePageElement::where('type',2)->get();
                    @endphp
                        <table class="table table datatable">
                            @php
                            $sl = 1;
                            @endphp
                            <thead>
                                <tr>
                                    <th>#Sl</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($elements)>0)
                                @foreach($elements as $element)

                                <tr >
                                    <td>{{$sl++}}</td>
                                    <td>{{$element->title}}</td>
                                    <td>
                                        <img src="{{asset($element->image)}}" alt="" width="100" height="100">
                                    </td>
                                    <td>
                                        Active
                                    </td>
                                    <td >
                                        <a href="{{route('home.industrial.element.delete',$element->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                        <a href="{{route('home.industrial.element.edit',$element->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                <td colspan="9" class="text-center"> No Career data added here</td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                    <!-- End manage Elements -->

  
              </div>
            </div>
  
          </div>
    </div>


  
  </section>
    
  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener for "add" buttons
    document.getElementById('elementTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('addElement')) {
            var addButton = event.target;

            var row = addButton.closest('tr');
            var clone = row.cloneNode(true);

            // Clear input values in the cloned row
            clone.querySelectorAll('input[type="text"], input[type="hidden"]').forEach(function(input) {
                input.value = '';
            });

            // Reset file input value
            clone.querySelectorAll('input[type="file"]').forEach(function(input) {
                input.value = null;
                input.removeAttribute('required'); // Temporarily remove the required attribute
            });

            // Clear img src attribute in the cloned row
            clone.querySelectorAll('img').forEach(function(img) {
                img.src = ''; // or set a default placeholder image
            });

            // Append the cloned row after the current row
            row.parentNode.insertBefore(clone, row.nextSibling);

            // Reapply the required attribute to file input after a short delay
            setTimeout(function() {
                clone.querySelectorAll('input[type="file"]').forEach(function(input) {
                    input.setAttribute('required', ''); // Reapply the required attribute
                });
            }, 100);
        }
    });

    // Add event listener for "remove" buttons (delegated to the parent element)
    document.getElementById('elementTable').addEventListener('click', function(event) {
        if (event.target.classList.contains('removeElement')) {
            var removeButton = event.target;
            var row = removeButton.closest('tr');

            // Check if the row being removed is not the first row
            if (row.previousElementSibling) {
                row.parentNode.removeChild(row);
            }
        }
    });
});




$(document).ready(function() {
        // Set the default value of the file input field based on the hidden input
        $('#elementImage').val($('#elementImageName').val());
        
        // Listen for changes in the file input field
        $('#elementImage').change(function() {
            // If a new file is selected, update the hidden input value
            if ($(this).val()) {
                $('#Name').val($(this).val());
            }
        });
    });


  </script>
@endsection