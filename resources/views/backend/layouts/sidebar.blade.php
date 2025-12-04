<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
{{--        <img src="{{asset('backend/img')}}/logo.png" class="img-fluid w-50">--}}
        <h4>Admin</h4>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item mb-2">
        <a class="nav-link d-flex align-items-center px-3 py-2 rounded bg-info text-white" href="{{ route('show.home') }}" target="_blank">
            <i class="fas fa-home me-2"></i>
            <span>Visit Site</span>
        </a>
    </li>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Authors -->
{{--    <li class="nav-item {{ request()->routeIs('admin.showAuthor') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{route('admin.showAuthor')}}">--}}
{{--            <i class="fas fa-th-large"></i>--}}
{{--            <span>Authors</span></a>--}}
{{--    </li>--}}

    <!-- Nav Item - Authors -->
    @php
        $allowedEmails = [
            'shawonahsan08@gmail.com',
            'adnanislamsompod@gmail.com',
        ];
    @endphp

    @if(in_array(Auth::user()->email, $allowedEmails))
        <li class="nav-item {{ request()->routeIs('admin.showAuthor') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.showAuthor') }}">
                <i class="fas fa-th-large"></i>
                <span>Authors</span>
            </a>
        </li>
    @endif


    <!-- Nav Item - Authors -->
    <li class="nav-item {{ request()->routeIs('admin.allDepartments') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.allDepartments')}}">
            <i class="fas fa-th-large"></i>
            <span>All Departments</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.addDepartment') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.addDepartment')}}">
            <i class="fas fa-th-large"></i>
            <span>Add Department</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.allDoctors') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.allDoctors')}}">
            <i class="fas fa-th-large"></i>
            <span>All Doctors</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.addDoctor') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.addDoctor')}}">
            <i class="fas fa-th-large"></i>
            <span>Add Doctor</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.appointment') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.appointment')}}">
            <i class="fas fa-th-large"></i>
            <span>Appointments</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.emergency') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.emergency')}}">
            <i class="fas fa-th-large"></i>
            <span>Emergency</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.pharmecy') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.pharmecy')}}">
            <i class="fas fa-th-large"></i>
            <span>Pharmecy</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.hospital') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.hospital')}}">
            <i class="fas fa-th-large"></i>
            <span>Hospitals</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('admin.contact')}}">
            <i class="fas fa-th-large"></i>
            <span>Contact</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->

