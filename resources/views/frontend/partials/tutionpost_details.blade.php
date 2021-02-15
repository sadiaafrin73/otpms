@extends('frontend.master')
@section('main')

<div class="container" >

    <div class="row" style="margin-top:100px;padding-top: 60px;">

        <div class="col-md-6">

        <div class="card" style="background: #0f6767;
      color: white;}">
      <div class="card-body">
         <div class="d-flex flex-column align-items-center text-center">
         <h1 class="card-title">Tutor Profile</h1>
            <img style="object-fit:cover;object-fit: cover;
               height: 150px;
               object-position: center;" src="{{url('/uploads/student_tutor_picture/'.$tutiondetails->tutor->image)}}" alt="user image" class="rounded-circle" width="150">
            <div class="mt-3">
               <p>
                  <label for=""></label>{{$tutiondetails->tutor->name}}
               </p>
               <p>
                  <label for=""> Email:</label>{{$tutiondetails->tutor->email}}
               </p>
               <p>
                  <label for=""> Mobile No:</label>{{$tutiondetails->tutor->mobile_number}}
               </p>
               </div>
         </div>

         
             <div>
              
               <p>
                  <label for="">Address:</label>{{$tutiondetails->tutor->address}}
               </p>
               
             
              <p>
                  <label for=""> Gender:</label>{{$tutiondetails->tutor->gender}}
              </p>
                           
                         
                           <p>
                              <label for="">Experience:</label>{{$tutiondetails->tutor->tutorR->Experience}}
                           </p>
                           Educational Qualifications:
                           @foreach($tutiondetails->tutor->qualifications as $key=>$qualification)
                           
                           <p>Examination Name:{{$qualification->examination}}</p>
                           <p>Group/Subject:{{$qualification->group_subject}}</p>
                           <p>Institution:{{$qualification->institution}}</p>
                           <p>Result:{{$qualification->result}}</p>
                           @endforeach
                    
            </div>
      </div>
   </div>
       
    
        </div>

        <div class="col-md-6">
     
        <div class="card" style="width: 100%;">
                <div class="card-body" style="background: #d8dce4;" >
                    <h2 class="card-title"style=" color: #0f6767">Tuition Details</h2>
                    <p>
                        <label for="">Tutor Name:</label>{{$tutiondetails->tutor->name}}
                    </p>
                    <p>
                        <label for="">Subject Name:</label>{{$tutiondetails->subjectname->name}}
                    </p>
                    <p>
                        <label for="">Group:</label> {{$tutiondetails->groupname->group}}
                    </p>
                    <p>
                        <label for="">Class:</label> {{$tutiondetails->hasclass->class}}
                    </p>
                    <p>
                        <label for="">Schedule:Day:</label> {{$tutiondetails->schedule_day}}
                    </p>
                    <p>
                        <label for="">Schedule:Time:</label> {{$tutiondetails->schedule_time}}
                    </p>
                    <p>
                        <label for="">Tution fee:</label> {{$tutiondetails->tution_fee}}
                    </p>
                   
                    
                    <p> 
                        <a class="btn btn-success" href="{{route('tution.list',['post_id'=>$tutiondetails->id])}}">Add</a>
                    </p>
                </div>
          <div>
      </div>

      <!-- duplicate card -->
      <div class="card" style="width: 100%; margin:10px 0">
                <div class="card-body" style="background: #d8dce4;" >
                    <h2 class="card-title"style=" color: #0f6767">Comments</h2>
                   
                    
                           @foreach($tutiondetails->tutor->tutorR->comments as $key=>$comment)
                           
                           <p>Comments:{{$comment->comments}}</p>
                           
                           @endforeach
                    
                    
                </div>
          <div>
      </div>
        </div>
    
    </div>

</div>



   <!-- <div class="col-md-6 col-sm-2" style="margin-top:50px">
   <div class="card" style="width: 20rem;">
    <div class="card-body">
    <h3 class="card-title">Tutor Profile</h3>
    <p>
        <label for="">Tutor Name:</label>{{$tutiondetails->tutor->name}}
        </p>
        <p>
        <label for="">Tutor Email:</label>{{$tutiondetails->tutor->email}}
        </p>
        <p>
        <label for="">Tutor Address:</label>{{$tutiondetails->tutor->address}}
        </p>
        <p>
        <label for="">Tutor Mobile No:</label>{{$tutiondetails->tutor->mobile_number}}
        </p>
       
        <p>
        <label for="">Tutor Gender:</label>{{$tutiondetails->tutor->gender}}
        </p>
        <p>
        <p>
        <label for="">Tutor Qualification:</label>{{$tutiondetails->tutor->tutorR->educational_qualification}}
        </p>
        <p>
        <label for="">Experience:</label>{{$tutiondetails->tutor->tutorR->Experience}}
        
        </p>
        @foreach($tutiondetails->tutor->qualifications as $key=>$qualification)

             <p>Examination Name:{{$qualification->examination}}</p>
             <p>Institution:{{$qualification->institution}}</p>
             <p>Result:{{$qualification->result}}</p>

        @endforeach
     </div>
     </div> 
 </div> -->

    @stop
    