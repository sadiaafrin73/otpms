@extends('backend.master')
@section('main')

<div id="content">



<!-- Begin Page Content -->
<div class="container-fluid">

  

    <!-- Content Row -->
    <div class="row">

        
        <!--Tutor list Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Tutor List</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tutor}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Student List Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Student List
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$list}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

       

    

</div>
<!-- /.container-fluid -->

</div>
@stop