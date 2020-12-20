@extends('backend.master')
@section('main')
<h1>Add new subject</h1>

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif



    <form action="{{route('subject.update',$subject->id)}}" method="post">
        @method('put')
        @csrf
       
        <div class="form-group">
            <label for="subject_name">Subject Name</label>
            <input value="{{$subject->name}}" name="subject_name" placeholder="Enter subject name" type="text" class="form-control" id="subject_name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="group">Group</label>
            <input value="{{$subject->group}}"name="group" placeholder="Enter group name" type="text" class="form-control" id="group">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input value="{{$subject->class}}"name="class" placeholder="Enter Class " type="text" class="form-control" id="class">
        </div>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
