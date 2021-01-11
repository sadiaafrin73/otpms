
@extends('frontend.master')
@section('main')

<h1>My Tution </h1>

<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tutor Name</th>
            <th scope="col">Tutor Email</th>
            <th scope="col">Tutor Address</th>
            <th scope="col">Tutor Mobile Number</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            <th scope="col">Schedule:Day</th>
            <th scope="col">Schedule:Time</th>
            <th scope="col">Tution Fee</th>
            
       
        </tr>
        </thead>
        <tbody>
        @foreach($student as $data)
            <tr>
            <th scope="row">{{$data->id}}</th>
                <td>{{$data->hastutor->name}}</td>
                <td>{{$data->hastutor->email}}</td>
                <td>{{$data->hastutor->address}}</td>
                <td>{{$data->hastutor->mobile_number}}</td>
                <td>{{$data->hassubject->subjectname->name}}</td>
                <td>{{$data->hassubject->groupname->group}}</td>
                <td>{{$data->hassubject->hasclass->class}}</td>
                <td>{{$data->hassubject->schedule_day}}</td>
                <td>{{$data->hassubject->schedule_time}}</td>
                <td>{{$data->hassubject->tution_fee}}</td>
                <td>
                
                
              
            </tr>
        @endforeach
        </tbody>
        
        
    </table>
        
    <div>
    {{$student->links()}}
    </div>
        @stop