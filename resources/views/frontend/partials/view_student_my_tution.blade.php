@extends('frontend.master')
@section('main')

<h1>Tution Post</h1>

<div class="form-group">
<p>
        <label for="">Tutor Name:</label>{{$tutionview->tutor->name}}
        </p>

        <p>
        <label for="">Tutor Email:</label>{{$tutionview->tutor->email}}
        </p>

        <p>
        <label for="">Tutor Address:</label>{{$tutionview->tutor->address}}
        </p>
        <label for="">Tutor Mobile Number:</label>{{$tutionview->tutor->mobile_number}}
        </p>

       <p>
        <label for="">Subject Name:</label>{{$tutionview->subjectname->name}}
        </p>

        <p>
        <label for="">Group:</label>{{$tutionview->subjectname->group}}
        </p>

        <p>
        <label for="">Class:</label>{{$tutionview->subjectname->class}}
        </p>
        <p>
        <label for="">Schedule:Day:</label>{{$tutionview->schedule_day}}
        </p>

        <p>
        <label for="">Schedule:Time:</label>{{$tutionview->schedule_time}}
        </p>

        <p>
        <label for="">Tution Fee:</label>{{$tutionview->tution_fee}}
        </p>

       

    </div>


@stop