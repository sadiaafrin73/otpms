@extends('backend.master')
@section('main')

<h3>Tutor Info</h3>


    <div class="form-group">
        <p>
        <label for="">Tutor Name:</label>{{$tutors->user->name}}
        </p>

        <p>
        <label for="">Tutor email:</label> {{$tutors->user->email}}
        </p>

        <p>
        <label for="">Mobile No:</label> {{$tutors->user->mobile_number}}
        </p>
        <p>
        <label for="">Gender:</label>{{$tutors->user->gender}}
        </p>

        <p>
        <label for="">Address:</label> {{$tutors->user->address}}
        </p>

        <p>
        <label for="">Qualification:</label> {{$tutors->educationa_qualification}}
        </p>
        
        <p>
        <label for="">Experience:</label> {{$tutors->Experience}}
        </p>


       

    </div>

    @stop