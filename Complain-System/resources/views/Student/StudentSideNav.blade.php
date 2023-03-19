{{-- <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student</title>


</head>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" style="cursor:pointer; " href="{{ url('redirect') }}">Sutdent Dashboard</a>
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
            <a class="nav-link" href="{{ url('NewComplain') }}">

                <span class="menu-title"> <i class="fas fa-pen"></i> <b>New Complain</b> </span>
            </a>
        </li>
        <li class="nav-item menu-items mt-3">
            <a class="nav-link" href="{{ url('ViewComplainList') }}">

                <span class="menu-title "> <i class="fa-sharp fa-solid fa-eye"></i> <b>All Complains</b> </span>
            </a>

            @if (Route::has('login'))
                @auth
            <li class="nav-item menu-items mt-3">

                <a class="nav-link" href="{{ url('SeeProfile') }}">

                    <span class="menu-title "> <i class="fa-sharp fa-solid fa-user"> </i> <b>Profile</b></span>
                </a>
            </li>
            <li class="nav-item menu-items  mt-3">
                <a class="nav-link" href="{{ url('logout') }}">

                    <span class="menu-title"> <i class="fa-solid fa-right-from-bracket"></i><b>Logout</b> </span>
                </a>
            </li>
        @else
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('NewComplain') }}">

                    <span class="menu-title"> <i class="fas fa-pen"></i> <b>Login</b> </span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('NewComplain') }}">

                    <span class="menu-title"> <i class="fas fa-pen"></i> <b>Register</b> </span>
                </a>
            </li>
            @endif
        @endauth

    </ul>
</nav> --}}

<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4 pt-5">
        <h1><a href="{{ url('redirect') }}" class="logo">Complain System</a></h1>
        <ul class="list-unstyled components mb-5">
            <li>
                <a href="{{ url('NewComplain') }}">New Complain</a>
            </li>
            <li>
                <a href="{{ url('ViewComplainList') }}">All Complains</a>
            </li>

            @if (Route::has('login'))
                @auth


                    <li>
                        <a href="{{ url('SeeProfile') }}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('logout') }}">Logout</a>
                    </li>
                @else
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>

                @endauth
            @endif

        </ul>
    </div>
</nav>
