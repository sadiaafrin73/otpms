@extends('backend.master')
@section('main')
    
     <h1>Add New Subject</h1>
     @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

     <form action="{{route('subject.addsubject')}}" method="post"> 
     @csrf
        <div class="form-group">
            <label for="subject_name">Subject Name</label>
            <input name="subject_name" placeholder="Enter subject name" type="text" class="form-control" id="subject_name" aria-describedby="emailHelp">

        </div>

       
        <div class="form-group">
    <label for="group">Group</label>
    <select name="group" class="form-control">
    <option disabled="" selected=""></option>
    @foreach($gr as $row)
    <option value="{{$row->id}}">{{$row->group}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="class">Class</label>
    <select name="class" class="form-control">
    <option disabled="" selected=""></option>
    @foreach($cl as $row)
    <option value="{{$row->id}}">{{$row->class}}</option>
    @endforeach
    </select>
  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop