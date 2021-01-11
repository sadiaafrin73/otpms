@extends('frontend.master')
@section('main')


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item active" role="personalinfo">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#personalinfo" role="tab" aria-controls="home" aria-selected="true">Personal Info</a>
  </li>
 

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade active in" id="personalinfo" role="tabpanel" aria-labelledby="home-tab">
  <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
  <div class="">
            
            <p>
            <label for="">Student Name:</label>{{auth()->user()->name}}
            </p>
            
            <p>
            <label for="">Student Email:</label>{{auth()->user()->email}}
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
</main>
  </div>
 
  </div>
  

@stop
