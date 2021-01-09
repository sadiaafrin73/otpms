@extends('backend.master')
@section('main')
    
     <h1>Add Group Name</h1>
    

     <form action="{{route('dashboard.group.submit')}}" method="post"> 
     @csrf
        <div class="form-group">
            <label for="group">Group Name</label>
            <input name="group" placeholder="Enter group name" type="text" class="form-control" id="group" aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@stop