@extends('backend.master')
@section('main')

<h3>Tution List</h3>


    <div class="form-group">
        <p>
        <label for="">Tutor Name:</label>{{$viewlist->hastutor->name}}
        </p>

        <p>
        <label for="">Tutor Email:</label>{{$viewlist->hastutor->email}}
        </p>

        <p>
        <label for="">Tutor Address:</label>{{$viewlist->hastutor->address}}
        </p>
        <label for="">Tutor Mobile Number:</label>{{$viewlist->hastutor->mobile_number}}
        </p>

        <p>
        <label for="">Student Name:</label>{{$viewlist->studentR->name}}

        <p>
        <label for=""> Student Email:</label>{{$viewlist->studentR->email}}
        </p>
        <p>
        <label for=""> Student Address:</label>{{$viewlist->studentR->address}}
        </p>
        <p>
        <label for="">Student Mobile Number:</label>{{$viewlist->studentR->mobile_number}}

       <p>
        <label for="">Subject Name:</label>{{$viewlist->hassubject->subjectname->name}}
        </p>

        <p>
        <label for="">Group:</label>{{$viewlist->hassubject->groupname->group}}
        </p>

        <p>
        <label for="">Class:</label>{{$viewlist->hassubject->hasclass->class}}
        </p>
        <p>
        <label for="">Schedule:Day:</label>{{$viewlist->hassubject->schedule_day}}
        </p>

        <p>
        <label for="">Schedule:Time:</label>{{$viewlist->hassubject->schedule_time}}
        </p>

        <p>
        <label for="">Tution Fee:</label>{{$viewlist->hassubject->tution_fee}}
        </p>

       

    </div>

    @stop