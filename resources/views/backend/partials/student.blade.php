@extends('backend.master')
@section('main')
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Gender</th>
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
                <td>{{$data->image}}</td>
               
                <td>
                    <a class="btn btn-warning" href="">view</a>
                 
                    <a class="btn btn-danger" href="{{route('dashboard.student.delete',$data->id)}}">Delete</a>
                 
                </td>
              
            </tr>
        @endforeach
    
  </tbody>
</table>

@stop