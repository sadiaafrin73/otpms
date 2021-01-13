@extends('frontend.master')
@section('main')

<h1>Tution Post</h1>

<div class="form-group">
        <p>
        <label for="">Tutor Name:</label>{{$view->tutor->name}}
        </p>

      
       <p>
        <label for="">Subject Name:</label>{{$view->subjectname->name}}
        </p>

        <p>
        <label for="">Group:</label>{{$view->subjectname->group}}
        </p>

        <p>
        <label for="">Class:</label>{{$view->subjectname->class}}
        </p>
        <p>
        <label for="">Schedule:Day:</label>{{$view->schedule_day}}
        </p>

        <p>
        <label for="">Schedule:Time:</label>{{$view->schedule_time}}
        </p>

        <p>
        <label for="">Tution Fee:</label>{{$view->tution_fee}}
        </p>

       

    </div>


























@stop