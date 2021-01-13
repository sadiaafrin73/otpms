
@extends('frontend.master')
@section('main')

<h1>My Tution </h1>

<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tutor Name</th>
            
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            <th scope="col">Action</th>
            
            
       
        </tr>
        </thead>
        <tbody>
        @foreach($student as $data)
            <tr>
            <th scope="row">{{$data->id}}</th>
                <td>{{$data->hastutor->name}}</td>
                
                <td>{{$data->hassubject->subjectname->name}}</td>
                <td>{{$data->hassubject->groupname->group}}</td>
                <td>{{$data->hassubject->hasclass->class}}</td>
               
                
                <td>
                <a class="btn btn-info" href="{{route('mytution.view',$data->id)}}">View</a> 
                
                </td>
               
              
            </tr>
        @endforeach
        </tbody>
        
        
    </table>
        
    <div>
    {{$student->links()}}
    </div>
        @stop