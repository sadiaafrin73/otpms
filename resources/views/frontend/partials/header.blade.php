<header id="header" class="fixed-top " style="background: rgba(40, 40, 40, 0.9);">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="">TuitionHub</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
          @guest
            <ul>
              <li class="active"><a href="">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#services">Tution Post</a></li>
             
          
              <li class="drop-down"><a href="">Log In</a>
                <ul>
                 <li><a href="{{route('dashboard.admin')}}">Admin</a></li>
                  <li><a href="{{route('tutor.login')}}">Tutor</a></li>
                  
                  <li><a href="{{route('student.login')}}">Student</a></li>
                  
                  
                </ul>
              </li>
          

            </ul>
            @endguest
          </nav><!-- .nav-menu -->
          <form class="form-inline my-2 my-lg-0">

          <form class="form-inline my-2 my-lg-0">
          @guest
      
          <button style="background-color: #009961 !important;border-color: #007bff !important;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Registration
          </button>
        @endguest
        @auth
        @if(auth()->user()->role=='tutor')
            
            
            
        <a class="btn btn-primary" href="{{route('tutor.profile')}}" style="margin-right:5px">My profile</a>
        <a class="btn btn-primary" href="{{route('tutor.tutionpost')}}" style="margin-right:5px">My Tution Post </a>
            
            <a class="btn btn-primary" href="{{route('tution.post')}}" style="margin-right:5px">Create Tution Post</a>
            
            <a class="btn btn-primary" href="{{route('tutor.tutionlist')}}" style="margin-right:5px">My Tution List</a>
            <a href="{{route('logout')}}" class="btn btn-primary">
                Logout
            </a>

         

            <img  style="object-fit:cover;object-fit: cover;width:65px; height:65px; border-radius:100%;margin-left:43px;
     
     object-position: center;" src="{{url('/uploads/student_tutor_picture/'.auth()->user()->image)}}" alt="user image">
           
                @endif
                @endauth

                @auth
        @if(auth()->user()->role=='student')
        <a class="btn btn-primary" href="{{route('student.profile')}}" style="margin-right:5px">My profile</a>
            
  
            
            <a class="btn btn-primary" href="#tution-section" style="margin-right:5px">Tution Post</a>
            <a class="btn btn-primary" href="{{route('mytution')}}" style="margin-right:5px">My Tution</a>
            <a href="{{route('logout')}}" class="btn btn-primary">
                Logout
            </a>


            <img  style="object-fit:cover;object-fit: cover;width:65px; height:65px; border-radius:100%;margin-left:43px;
     
    object-position: center;" src="{{url('/uploads/student_tutor_picture/'.auth()->user()->image)}}" alt="user image">
            
                @endif
                @endauth


               
</form>
         
          
        </div>
      </div>

    </div>
  </header>


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tutor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Student</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade  active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <form method="post" action="{{route('tutor.registration')}}"enctype="multipart/form-data">
    @csrf
     
     
        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
         </div>

        
        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="Enter Address" required>
         </div>

         <div class="form-group">
            <label for="mobile_number">Mobile number:</label>
            <input name="mobile_number" type="text" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
        </div>

        <div class="form-group">
            <label for="name">Gender:</label>
            <input name="gender" type="text" class="form-control" id="gender" placeholder="Enter Gender" required>
         </div>

         <div class="form-group">
            <label for="educational_qualification">Educational Qualification:</label>
            <input name="educational_qualification" type="text" class="form-control" id="educational_qualification" placeholder="Enter educational qualification" required>
         </div>

         <div class="form-group">
            <label for="experience">Experience:</label>
            <input name="experience" type="text" class="form-control" id="experience" placeholder="Enter your working experience">
         </div>

         <div class="form-group">
            <label for="image">Upload User Image:</label>
            <input name="image" type="file" class="form-control" id="image" required>
        </div>

        <div class="form-group">

           <button type="submit" class="btn btn-success">Register</button>
         </div>
  </form>
  
  
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
  <form method="post" action="{{route('student.registration')}}"enctype="multipart/form-data">
    @csrf
     
        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
         </div>

        
        <div class="form-group">
            <label for="email">Email:</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
        </div>

        <div class="form-group">
            <label for="name">Address:</label>
            <input name="address" type="text" class="form-control" id="name" placeholder="Enter Address" required>
         </div>

         <div class="form-group">
            <label for="mobile_number">Mobile number:</label>
            <input name="mobile_number" type="text" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
        </div>
        
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input name="gender" type="text" class="form-control" id="gender" placeholder="Enter Gender" required>
         </div>

        <div class="form-group">
            <label for="image">Upload User Image:</label>
            <input name="image" type="file" class="form-control" id="image" required>
        </div>

        <div class="form-group">

           <button type="submit" class="btn btn-success">Register</button>
         </div>
  </form>
  
  
  </div>
  
</div>
      </div>
     
    </div>
  </div>
</div>
  