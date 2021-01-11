@extends('frontend.master')
@section('main')

<h1>Tution list</h1>

<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student Email</th>
            <th scope="col">Student Address</th>
            <th scope="col">Student Mobile Number</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            <th scope="col">Schedule:Day</th>
            <th scope="col">Schedule:Time</th>
            <th scope="col">Tution Fee</th>
            
       
        </tr>
        </thead>
        <tbody>
        @foreach($tutionlist as $data)
            <tr>
            <th scope="row">{{$data->id}}</th>
                <td>{{$data->studentR->name}}</td>
                <td>{{$data->studentR->email}}</td>
                <td>{{$data->studentR->address}}</td>
                <td>{{$data->studentR->mobile_number}}</td>
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
    {{$tutionlist->links()}}
    </div>
    @stop
    