@extends('frontend.master')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
        @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
          <h1>Online Tution Platform</h1>
          <h2>Education is one thing no one can take away from you</h2>
          
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
 

@section('main')

<main id="main">
@auth
@if(auth()->user()->role=='student')
<section  id="services-sec">
    <div class="container">
    <div class="row go-marg" id="tution-section">
    @foreach($tution as $key=>$data)
      <div class="col-md-4 col-sm-2" style="margin-top:50px">
      

<div class="card" style="width: 20rem; color:#020202">
  <div class="card-body"style="background: #d8dce4;">
    <h5 class="card-title">Tution Post  {{$key+1}}</h5>
    <p>Subject : {{$data->subjectname->name}}</p>
    <p>Group   : {{$data->groupname->group}}</p>
    <p>Class   :{{optional($data->hasclass)->class}}</p>
    <a class="btn btn-info" href="{{route('tution.post.details',$data->id)}}">Details</a>
                           
  </div>
</div>

      </div>
      @endforeach
                            
            </div>
        </div>
                </hr>
            
                    
        </div>
    </div>
</section>
@endif
@endauth

@guest
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
         
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Tuitionhub is an online platform that connects tutor and student that helps them to get tuition easily
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Easily find experienced tutor </li>
              <li><i class="ri-check-double-line"></i> Student see tutor profile </li>
              <li><i class="ri-check-double-line"></i> Connect tutor and student</li>
            </ul>
          </div>
         
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
   
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="section-title">
              <h2>Tution post</h2>
            
            </div>
        </div>
      <div class="row">
      @foreach($tution as $key=>$data)
      <div class="col-md-4 col-sm-2" style="margin-top:50px">
      

<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title">Tution Post  {{$key+1}}</h5>
    <p>Subject : {{$data->subjectname->name}}</p>
    <p>Group   : {{$data->groupname->group}}</p>
    <p>Class   :{{optional($data->hasclass)->class}}</p>
    <a class="btn btn-info" href="{{route('tution.post.details',$data->id)}}">Details</a>
                           
  </div>
</div>

      </div>
      @endforeach

       

      </div>
      </div>
    </section>

   

    
   

   

  
    

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Email Address:Adnan@gmail.com</p>
          <p>Contact no:09452758</p>
        </div>
      </div>

     

    </section><!-- End Contact Section -->

  </main>
@endguest



@Stop