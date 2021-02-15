@extends('frontend.master')


@section('main')
<div style="padding:100px 0">
<div class="container">
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" style="background: #0f6767;
    color: white;}">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img style="object-fit:cover;object-fit: cover;
    height: 150px;
    object-position: center;" src="{{url('/uploads/student_tutor_picture/'.auth()->user()->image)}}" alt="user image" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <p>
                       <label for=""></label>{{auth()->user()->name}}
                   </p>
                
                     <p>
                       <label for=""></label>{{auth()->user()->email}}
                     </p>
                     <p>
                       <label for="">Phone No:</label>{{auth()->user()->mobile_number}} 
                     </p>
                     <p>
                       <label for="">Address:</label>{{auth()->user()->address}}
                     </p>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8"> 
              <div class="card mb-3" style="background: #fafbfd;">
                <div class="card-body">
                  
                <div class="container">
             <div class="row">
               <div class="col-md-12">
                <!-- wrapper -->
                  
                <!-- heading -->

                   <div>
                   <h1 class="text-capitalize" style="letter-spacing: 8px;
    color: #0f6767;">Biography</h1>
                   </div>
                   <div style="padding:50px 0">
                 <!-- body -->
                    <div class="person-info">
                 <!-- info -->
                    <div>
               
               
                    <p>
                <label for="">Gender:</label>{{auth()->user()->gender}}
                </p>
                
                <p>
                <label for="">Experience:</label>{{$tutor->Experience}}
                </p>  
               <h5>Educational Qualification:</h5>

               @foreach($qualifications as $key=>$qualification)

                  <p>Examination Name:{{$qualification->examination}}</p>
                  <p>Group/Subject:{{$qualification->group_subject}}</p>
                  <p>Institution:{{$qualification->institution}}</p>
                  <p>Result:{{$qualification->result}}</p>

               @endforeach

          </div>
          <!-- button -->
          <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Qualification</button>
          </div>
        </div>
                 
                  
                   
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>














  <!-- modal -->
 

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <div class="tab-content" id="myTabContent">
  <div class="tab-pane   active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
  <form method="post" action="{{route('tutor.add_qualification')}}">
    @csrf
     

        <div class="form-group">
            <label for="examination">Examination Name:</label>
            <input name="examination" type="text" class="form-control" id="examination" placeholder="Enter examination type" required>
         </div>

         <div class="form-group">
            <label for="group_subject">Group/Subject:</label>
            <input name="group_subject" type="text" class="form-control" id="group_subject" placeholder="Enter group/subject" required>
        </div>

         <div class="form-group">
            <label for="institution">Institution:</label>
            <input name="institution" type="text" class="form-control" id="institution" placeholder="Enter institute name" required>
        </div>
        <div class="form-group">
            <label for="result">Result:</label>
            <input name="result" type="text" class="form-control" id="result" placeholder="Enter G.P.A" required>
        </div>
        
      

        <div class="form-group">

           <button type="submit" class="btn btn-success">submit</button>
         </div>
  </form>
  
  
  </div>
  
</div>
      </div>
      
    </div>
  </div>
</div>
  </div>
</div>
@stop
