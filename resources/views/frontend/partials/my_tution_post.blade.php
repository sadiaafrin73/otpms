@extends('frontend.master')
@section('main')
<div style="padding:100px 0">
<h1>Tution Post</h1>

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
        @foreach($post as $data)
        
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->tutor->name}}</td>
                <td>{{$data->subjectname->name}}</td>
                <td>{{$data->groupname->group}}</td>
                <td>{{optional($data->hasclass)->class}}</td>
                
                <td>
                    <a class="btn btn-info" href="{{route('tutor.tutionpost.view',$data->id)}}">View</a>

                
                </td>
              
            </tr>
        @endforeach
        </tbody>
        
        </table>
        @stop