@extends('backend.master')
@section('main')
    
     <h1>Add Class</h1>
    

     <form action="{{route('dashboard.class.submit')}}" method="post">  
     @csrf
     <div class="form-group">
            <label for="class">Class</label>
            <input name="class" placeholder="Enter Class " type="text" class="form-control" id="class">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@stop