@extends('backend.master')
@section('main')

<h3>Subject Info</h3>


    <div class="form-group">
        <p>
        <label for="">Subject Name:</label>{{$subject->name}}
        </p>

        <p>
        <label for="">Group:</label> {{$subject->group}}
        </p>

        <p>
        <label for="">Class:</label> {{$subject->class}}
        </p>

       

    </div>

    @stop









