<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

                
            <div class="content-page">
               
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title"></h4>
                                <ol class="breadcrumb pull-right">
                                   
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right">TuitionHub</h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Invoice # <br>
                                                    <strong>{{date('d/m/y')}}</strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                               
                                                <div class="pull-right m-t-30">
                                                    <p><strong> Date: </strong> {{date("l jS \of F Y")}}</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>#</th>
                                                           
            <th scope="col">Tutor Name</th>
            <th scope="col">Tutor Email</th>
            
            <th scope="col">Student Name</th>
            <th scope="col">Student Email</th>
            
            <th scope="col">Subject Name</th>
            <th scope="col">Group</th>
            <th scope="col">Class</th>
            
                                                            
              </tr>
              </thead>
                <tbody>
                                                            
            @foreach($report as $data)
            <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->hastutor->name}}</td>
            <td>{{$data->hastutor->email}}</td>
               
               
                <td>{{$data->studentR->name}}</td>
                <td>{{$data->studentR->email}}</td>
                
                <td>{{$data->hassubject->subjectname->name}}</td>
                <td>{{$data->hassubject->groupname->group}}</td>
                <td>{{$data->hassubject->hasclass->class}}</td>
                
               
                
                
              
            </tr>
        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" onclick="window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>



            </div> <!-- container -->
                               
                </div> <!-- content -->


    
</body>
</html>