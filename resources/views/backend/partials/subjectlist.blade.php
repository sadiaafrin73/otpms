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
           
       
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->group->group}}</td>
                <td>{{$data->classnumber->class}}</td>
              
              
            </tr>
        @endforeach
        </tbody>
    </table>



@stop