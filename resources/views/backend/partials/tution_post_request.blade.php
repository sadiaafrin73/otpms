@extends('backend.master')
@section('main')

<h1>Tution Post Request</h1>

<table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tutor Name</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            <th scope="col">Schedule:Day</th>
            <th scope="col">Schedule:Time</th>
            <th scope="col">Address</th>
            <th scope="col">Tution Fee</th>
            <th scope="col">Action</th>
       
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->tutor->name}}</td>
                <td>{{$data->subjectname->name}}</td>
                <td>{{$data->groupname->group}}</td>
                <td>{{optional($data->hasclass)->class}}</td>
                <td>{{$data->schedule_day}}</td>
                <td>{{$data->schedule_time}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->tution_fee}}</td>
                <td>
                    <a class="btn btn-warning" href="#">Edit</a>
                    <a class="btn btn-danger" href="#">Delete</a>
                    <a class="btn btn-info" href="#">View</a>

                    @if($data->is_approved == null)
                    <a class="btn btn-info" href="{{route('tution_post_request.approved',$data->id)}}">not approved</a>
                    @else
                    <a class="btn btn-success" href="{{route('tution_post_request.approved',$data->id)}}"> approved</a>
                    @endif

                </td>
              
            </tr>
        @endforeach
        </tbody>
        
    </table>
    <div>
    {{$list->links()}}
    </div>
@stop