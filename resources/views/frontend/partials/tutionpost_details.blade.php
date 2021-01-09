@extends('frontend.master')
@section('main')


<h3>Tution Details</h3>


    <div class="form-group">
    <p>
        <label for="">Tutor Name:</label>{{$tutiondetails->tutor_id}}
        </p>

        <p>
        <label for="">Subject Name:</label>{{$tutiondetails->subjectname->id}}
        </p>

        <p>
        <label for="">Group:</label> {{$tutiondetails->group_id}}
        </p>

        <p>
        <label for="">Class:</label> {{$tutiondetails->classnumber_id}}
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
        <a class="btn btn-success" href="">Add</a>
        </p>


       

    </div>

    @stop
    