<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Tutor</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="{{route('dashboard.tutor.tutor_list')}}">Tutor List</a>
        </div>
    </div>
</li>
<!-- Nav Item - Student -->
<li class="nav-item">
    <a class="nav-link" href="{{route('dashboard.student')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Student<span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Subjects</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('dashboard.subject.addsubject')}}">Add Subject</a>
            <a class="collapse-item" href="{{route('dashboard.group')}}">Add Group</a>
            <a class="collapse-item" href="{{route('dashboard.class')}}">Add Class</a>
            <a class="collapse-item" href="{{route('dashboard.subject.subjectlist')}}"> Subject List</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Tution -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetution"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Tution</span>
    </a>
    <div id="collapsetution" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('dashboard.tution_post_request')}}">Tution Post Request </a>
        
            <a class="collapse-item" href="{{route('show.tutionlist')}}">Tution List</a>
           
        </div>
    </div>
</li>




<!-- Nav Item - Report -->
<li class="nav-item">
    <a class="nav-link" href="{{route('dashboard.report')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Report</span></a>
</li>

</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

</ul>
