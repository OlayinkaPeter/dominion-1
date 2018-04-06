<!-- Side Navbar -->
<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset(Auth::user()->profile_picture) }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4">{{ Auth::user()->first_name . " " . Auth::user()->last_name }}</h1>
            <p>{{ Auth::user()->role->name }}</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <ul class="list-unstyled">
        <li class="{{ isset($page) && $page->view == 'm.home' ? 'active' : '' }}"><a href="{{ url('/home') }}"> <i class="icon-home"></i>Dashboard </a></li>
        <li class="{{ isset($page) && $page->view == 'm.profile' ? 'active' : '' }}"><a href="{{ url('profile') }}"> <i class="icon-user"></i>Profile </a></li>
        <li class="">
            <a href="{{ route('logout') }}" class="nav-link logout"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
        </li>
    </ul>

    <span class="heading">Main Menu</span>
    <ul class="list-unstyled">
        <li class="{{ isset($page) && $page->view == 'm.patients' ? 'active' : '' }}"><a href="{{ url('/patients') }}"> <i class="fa fa-users"></i>Patients </a></li>
        <li class="{{ isset($page) && $page->view == 'm.cases' ? 'active' : '' }}"><a href="{{ url('/cases') }}"> <i class="icon-padnote"></i>Cases </a></li>
        <li><a href="#"> <i class="fa fa-calendar-o"></i>Appointments </a></li>
        <li><a href="#"> <i class="icon-bars"></i>Departments </a></li>
        <li><a href="#"> <i class="icon-check"></i>Cases </a></li>
        <li><a href="#"> <i class="fa fa-calendar-o"></i>Schedules (On Call) </a></li>
        <li><a href="#"> <i class="icon-page"></i>Research / Case Reviews </a></li>
    </ul>

    <span class="heading">Management</span>
    <ul class="list-unstyled">
        <li><a href="#"> <i class="icon-user"></i>Doctors </a></li>
        <li><a href="#"> <i class="icon-user"></i>Staffs </a></li>
        <li><a href="#"> <i class="icon-user"></i>Patients </a></li>
        <li><a href="#"> <i class="icon-bill"></i>Billing </a></li>
        <li><a href="#"> <i class="icon-picture"></i>Noticeboard </a></li>
        <li><a href="#"> <i class="icon-page"></i>Drug Inventory </a></li>
        <li><a href="#"> <i class="icon-flask"></i>Public Feed </a></li>
    </ul>
</nav>