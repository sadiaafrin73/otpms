@extends('frontend.master')

<div class="container"style="margin-top:50px">
@if(session()->has('msg'))
   <p class= "alert alert-success">{{session()->get('msg')}}</p>
@endif
<h1>Add Tution Post </h1>

<form  method="post" action="{{route('tution.post.submit')}}">
@csrf



  <div class="form-group">
    <label for="subject_name">Subject Name</label>
    <select name="name" class="form-control">
    <option disabled="" selected=""></option>
    @foreach($sn as $row)
    <option value="{{$row->id}}">{{$row->name}}</option>
    @endforeach
    </select>
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

  <div class="form-group">
    <label for="schedule_day">Schedule:Day</label>
    <input name="schedule_day"type="text" class="form-control" id="schedule_day" placeholder="Enter Day Schedule">
  </div>

  <div class="form-group">
    <label for="schedule_time">Schedule:Time</label>
    <input name="schedule_time"type="text" class="form-control" id="schedule_time" placeholder="Enter Time Schedule">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input name="address"type="text" class="form-control" id="address" placeholder="Enter Address">
  </div>

  <div class="form-group">
    <label for="tution_fee">Tution Fee</label>
    <input name="tution_fee"type="text" class="form-control" id="tution_fee" placeholder="Enter Tution Fee">
  </div>
  
 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>




