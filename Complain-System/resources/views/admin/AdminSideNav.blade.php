<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student</title>
    <!-- plugins:css -->

</head>







<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" style="cursor:pointer; " href="{{ url('redirect') }}">Admin Dashboard</a>
        <a class="sidebar-brand brand-logo-mini"></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">

                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        <span>{{ Auth::user()->UserType }}</span>
                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('AddModerators') }}">

                <span class="menu-title"> <i class="fas fa-pen"></i> <b>Add Moderators</b> </span>
            </a>
        </li>
        <li class="nav-item menu-items mt-3">
            <a class="nav-link" href="{{ url('ViewModeratorsList') }}">
                {{-- <span class="menu-icon">

                </span> --}}
                <span class="menu-title"> <i class="fa-solid fa-list"></i> <b>Moderators List</b> </span>
            </a>
        </li>
        <li class="nav-item menu-items mt-3">
            <a class="nav-link" href="{{ url('ViewComplain') }}">

                <span class="menu-title "> <i class="fa-sharp fa-solid fa-eye"></i> <b>All Complains</b> </span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items mt-3">
            <a class="nav-link" href="{{ url('ViewEmergencyComplain') }}">

                <span class="menu-title "> <i class="fa-sharp fa-solid fa-eye"></i> <b>Emergency Complains</b> </span>
            </a>
        </li> --}}
        @if (Route::has('login'))
            @auth
                <li class="nav-item menu-items mt-3">

                    <a class="nav-link" href="{{ url('SeeProfile') }}">
                        {{-- <span class="menu-icon">Profile

                        </span> --}}
                        <span class="menu-title "> <i class="fa-sharp fa-solid fa-user"> </i> <b>Profile</b></span>
                    </a>
                </li>
                <li class="nav-item menu-items  mt-3">
                    <a class="nav-link" href="{{ url('logout') }}">
                        {{-- <span class="menu-icon">

                </span> --}}
                        <span class="menu-title"> <i class="fa-solid fa-right-from-bracket"></i><b>Logout</b> </span>
                    </a>
                </li>
            @else
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('login') }}">
                        {{-- <span class="menu-icon">

                </span> --}}
                        <span class="menu-title"> <i class="fas fa-pen"></i> <b>Login</b> </span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('register') }}">
                        {{-- <span class="menu-icon">

                </span> --}}
                        <span class="menu-title"> <i class="fas fa-pen"></i> <b>Register</b> </span>
                    </a>
                </li>
            @endif
        @endauth

    </ul>
</nav>
