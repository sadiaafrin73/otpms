@extends('backend.master')
@section('main')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">mobile_no</th>
      <th scope="col">gender</th>
      
    </tr>

  </thead>

  <tbody>
  @foreach($tutor as $data)
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
                   
                 
                </td>
              
            </tr>
        @endforeach
    
  </tbody>
</table>
@stop