<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"
        style="background-color:#fff; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('Admin/img/gill-logo.png') }}" height="72px" style="margin-top: 2px">
        </div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

   
    {{-- <li class="nav-item {{ request()->segment(2) == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home.index') }}">
            <i class="fas fa-plane"></i>
            <span>Home Page content</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'home-image' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home-image.index') }}">
            <i class="fas fa-plane"></i>
            <span>Home Page Image content</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'home-airlines' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home-airlines.index') }}">
            <i class="fas fa-plane"></i>
            <span>Home Page Airlines content</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'home-testimonials' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.home-testimonials.index') }}">
            <i class="fas fa-plane"></i>
            <span>Home Page testimonials content</span></a>
    </li> --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ship"></i> <span class="hidden-xs">Home Page</span>
        </a>
        <div class="dropdown-menu">
            <a class="nav-link" href="{{ route('admin.home.index') }}">
                <i class="fas fa-plane"></i>
                <span>Home Page content</span></a>
            <a class="nav-link" href="{{ route('admin.home-image.index') }}">
                <i class="fas fa-plane"></i>
                <span>Home Page Image content</span></a>
            <a class="nav-link" href="{{ route('admin.home-airlines.index') }}">
                <i class="fas fa-plane"></i>
                <span>Home Page Airlines content</span></a>
            <a class="nav-link" href="{{ route('admin.home-testimonials.index') }}">
                <i class="fas fa-plane"></i>
                <span>Home Page testimonials content</span></a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ship"></i> <span class="hidden-xs">Cruises</span>
        </a>
        <div class="dropdown-menu">
            <a class="nav-link" href="{{ route('admin.cruises-vacations.index') }}">
                <i class="fas fa-ship"></i>
                <span>Cruise Vacation</span></a>
            <a class="nav-link" href="{{ route('admin.top-cruise-ports.index') }}">
                <i class="fas fa-ship"></i>
                <span>Top cruise port</span></a>
            <a class="nav-link" href="{{ route('admin.cruises-ship-options.index') }}">
                <i class="fas fa-ship"></i>
                <span>Cruise ship options</span></a>
        </div>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'flight' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.flight.index') }}">
            <i class="fas fa-plane"></i>
            <span>Flight</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'vacation' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.vacation.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Vacation</span></a>
    </li>
    {{-- <li class="nav-item {{ request()->segment(1) == 'group-vacation' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.group-vacation.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Group Vacation</span></a>
    </li> --}}
    <li class="nav-item {{ request()->segment(2) == 'disney' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.disney.index') }}">
            <i class="fas fa-snowflake"></i>
            <span>Disney</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'wedding' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.wedding.index') }}">
            <i class="fas fa-church"></i>
            <span>Wedding</span></a>
    </li>

    <li class="nav-item {{ request()->segment(2) == 'about-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.about-us.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>About Us</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'destination' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.destination.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Destination</span></a>
    </li>
    {{-- <li class="nav-item {{ request()->segment(2) == 'footer' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.about-us.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Footer Content</span></a>
    </li> --}}
    {{-- <li class="nav-item {{ request()->segment(2) == 'contact-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.contact-us.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contact Us Page</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'contact-us-query' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.contact-us-query.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contact Us Queries</span></a>
    </li> --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ship"></i> <span class="hidden-xs">Contact Us page</span>
        </a>
        <div class="dropdown-menu">
            <a class="nav-link" href="{{ route('admin.contact-us.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Contact Us Page</span></a>
            <a class="nav-link" href="{{ route('admin.contact-us-query.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Contact Us Queries</span></a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ship"></i> <span class="hidden-xs">Footer</span>
        </a>
        <div class="dropdown-menu">
            <a class="nav-link" href="{{ route('admin.useful-links.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Useful Links</span></a>
                <a class="nav-link" href="{{ route('admin.information-links.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Information Links</span></a>
        </div>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'admin' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.admin.index') }}">
            <i class="fas fa-plane"></i>
            <span>Admin</span></a>
    </li>
    {{-- <li class="nav-item {{ request()->segment(2) == 'useful-links' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.useful-links.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Useful Links</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'information-links' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.information-links.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Information Links</span></a>
    </li> --}}




    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
