@extends('backend.master')
@section('main')

<h1>Tutor Request</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Gender</th>
            <th scope="col">Educational Qualification</th>
            <th scope="col">Experience</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
       
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->mobile_number}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->educational_qualification}}</td>
                <td>{{$data->experience}}</td>
                <td>{{$data->image}}</td>
               
                <td>
                    <a class="btn btn-warning" href="">Add</a>
                    <a class="btn btn-danger" href="">Delete</a>
                 
                </td>
              
            </tr>
        @endforeach
        </tbody>
    </table>
@stop