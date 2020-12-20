<header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">OTPMS</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li class="drop-down"><a href="">Log In</a>
                <ul>
                 <li><a href="{{route('dashboard.admin')}}">Admin</a></li>
                  <li><a href="{{route('tutor.login')}}">Tutor</a></li>
                  
                  <li><a href="#">Student</a></li>
                  
                  
                </ul>
              </li>
          

            </ul>
          </nav><!-- .nav-menu -->

          <a href="#about" class="get-started-btn scrollto">Log out</a>
        </div>
      </div>

    </div>
  </header>