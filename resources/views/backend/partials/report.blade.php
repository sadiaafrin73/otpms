
@extends('backend.master')
@section('main')

<h1>Report</h1>
<div style="margin:20px;float:right">
<a style="float: right" type="submit" onclick="window.print()" class="btn btn-primary" href="#"> Print</a>
</div>

                   
<table class="table">
<form  action="{{ route('dashboard.date.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="date">Date From:</label>
                        <input name="date"type="date" value="" class="" id="date" >
                    </div>
                    <div class="form-group">
                        <label for="date1">Date To:</label>
                        <input name="date1"type="date" value="" class="align:right" id="date1" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tutor Name</th>
            <th scope="col">Tutor Email</th>
            
            <th scope="col">Student Name</th>
            <th scope="col">Student Email</th>
            
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            
           
            
       
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->hastutor->name}}</td>
            <td>{{$data->hastutor->email}}</td>
               
               
                <td>{{$data->studentR->name}}</td>
                <td>{{$data->studentR->email}}</td>
                
                <td>{{$data->hassubject->subjectname->name}}</td>
                <td>{{$data->hassubject->groupname->group}}</td>
                <td>{{$data->hassubject->hasclass->class}}</td>
                
               
                
                
              
            </tr>
        @endforeach
        </tbody>
       
        </table>
        {{$list->links()}}
        @stop