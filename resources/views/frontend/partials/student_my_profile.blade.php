@extends('frontend.master')
@section('main')

<div style="padding:100px 0">
<div class="container">
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" style="background: #0f6767;
    color: white;}">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img style="object-fit:cover;object-fit: cover;
    height: 150px;
    object-position: center;" src="{{url('/uploads/student_tutor_picture/'.auth()->user()->image)}}" alt="user image" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <p>
                       <label for=""></label>{{auth()->user()->name}}
                   </p>
                
                     <p>
                       <label for="">Email:</label>{{auth()->user()->email}}
                     </p>
                     <p>
                     <label for="">Address:</label>{{auth()->user()->address}}
                     </p>
                     <p>
                       <label for="">Phone No:</label>{{auth()->user()->mobile_number}} 
                     </p>
                     <p>
                        <label for="">Gender:</label>{{auth()->user()->gender}}
                    </p>
                       
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            </div>
                </div>
              </div>
              
            </div>












@stop
