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
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ship"></i> <span class="hidden-xs">Cruises</span>
        </a>
        <div class="dropdown-menu">
            <a class="nav-link" href="{{ route('admin.cruises-ship-options.index') }}">
                <i class="fas fa-ship"></i>
                <span>Cruise Vacation</span></a>
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-ship"></i>
                <span>Top cruise port</span></a>
            <a class="nav-link" href="{{ route('admin.cruises-ship-options.index') }}">
                <i class="fas fa-ship"></i>
                <span>Cruise ship options</span></a>
        </div>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'flight' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.flight.index') }}">
            <i class="fas fa-plane"></i>
            <span>Flight</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'vacation' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.vacation.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Vacation</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'group-vacation' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.group-vacation.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Group Vacation</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'disney' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.disney.index') }}">
            <i class="fas fa-snowflake"></i>
            <span>Disney</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'wedding' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.wedding.index') }}">
            <i class="fas fa-church"></i>
            <span>Wedding</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'about-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.about-us.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>About Us</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'about-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.about-us.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Footer Content</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'contact-us' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.contact-us.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contact Us Page</span></a>
    </li>
    <li class="nav-item {{ request()->segment(1) == 'contact-us-query' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.contact-us-query.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contact Us Queries</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>

