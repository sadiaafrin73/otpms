@extends('frontend.master')
@section('main')


<h3>Tution Details</h3>
<div class="container">
    <div class="row">
    <div class="col-md-6" style="margin-top:50px">
    <div class="card" style="width: 20rem;">

<div class="card-body">
  <h2 class="card-title">Tutuion Details</h2>
  <p>
<label for="">Tutor Name:</label>{{$tutiondetails->tutor->name}}
</p>

<p>
<label for="">Subject Name:</label>{{$tutiondetails->subjectname->name}}
</p>

<p>
<label for="">Group:</label> {{$tutiondetails->groupname->group}}
</p>

<p>
<label for="">Class:</label> {{$tutiondetails->hasclass->class}}
</p>

<p>
<label for="">Schedule:Day</label> {{$tutiondetails->schedule_day}}
</p>

<p>
<label for="">Schedule:Time</label> {{$tutiondetails->schedule_time}}
</p>


<p>
<label for="">Tution fee:</label> {{$tutiondetails->tution_fee}}
</p>



<p> 
<a class="btn btn-success" href="{{route('tution.list',['post_id'=>$tutiondetails->id])}}">Add</a>

</p>


</div>
<div>
    </div>
    
    </div>
</div>


   <div class="col-md-6 col-sm-2" style="margin-top:50px">
   <div class="card" style="width: 20rem;">
    <div class="card-body">
    <h3 class="card-title">Tutor Profile</h3>
    <p>
        <label for="">Tutor Name:</label>{{$tutiondetails->tutor->name}}
        </p>
        <p>
        <label for="">Tutor Email:</label>{{$tutiondetails->tutor->email}}
        </p>
        <p>
        <label for="">Tutor Address:</label>{{$tutiondetails->tutor->address}}
        </p>
        <p>
        <label for="">Tutor Mobile No:</label>{{$tutiondetails->tutor->mobile_number}}
        </p>
       
        <p>
        <label for="">Tutor Gender:</label>{{$tutiondetails->tutor->gender}}
        </p>
        <p>
        <p>
        <label for="">Tutor Qualification:</label>{{$tutiondetails->tutor->tutorR->educational_qualification}}
        </p>
        <p>
        <label for="">Experience:</label>{{$tutiondetails->tutor->tutorR->Experience}}
        </p>
    </div>
   </div>
      

      
    
    
    
        </div>


    @stop
    