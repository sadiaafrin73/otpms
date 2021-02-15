@extends('backend.master')
@section('main')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      
      <th scope="col">mobile_no</th>

      <th scope="col">Action</th>
      
    </tr>

  </thead>

  <tbody>
  @foreach($tutor as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->mobile_number}}</td>
             
               
               
                <td>
                    <a class="btn btn-warning" href="{{route('dashboard.tutor.tutor_list.view',$data->id)}}">view</a>
                    <a class="btn btn-danger" href="{{route('dashboard.tutor.tutor_list.delete',$data->id)}}">delete</a>
                   
                 
                </td>
              
            </tr>
        @endforeach
    
  </tbody>
</table>
@stop