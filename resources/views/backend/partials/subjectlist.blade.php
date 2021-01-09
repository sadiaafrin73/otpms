@extends('backend.master')
@section('main')


    <h1>Subject List</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            <th scope="col">Action</th>
       
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->group->group}}</td>
                <td>{{$data->classnumber->class}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('subject.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('subject.delete',$data->id)}}">Delete</a>
                    <a class="btn btn-info" href="{{route('subject.view',$data->id)}}">View</a>
                </td>
              
            </tr>
        @endforeach
        </tbody>
    </table>



@stop