@extends('backend.master')
@section('main')
    
     <h1>Add New Subject</h1>

     <form action="{{route('subject.addsubject')}}" method="post"> 
     @csrf
        <div class="form-group">
            <label for="subject_name">Subject Name</label>
            <input name="subject_name" placeholder="Enter subject name" type="text" class="form-control" id="subject_name" aria-describedby="emailHelp">

        </div>

       
        <div class="form-group">
            <label for="group">Group</label>
            <input name="group" placeholder="Enter group name" type="text" class="form-control" id="group">
        </div>

        <div class="form-group">
            <label for="class">Class</label>
            <input name="class" placeholder="Enter Class " type="text" class="form-control" id="class">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop