<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student</title>
    <!-- plugins:css -->

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
                {{-- <span class="menu-icon">

                </span> --}}
                <span class="menu-title"> <i class="fas fa-pen"></i> <b>New Complain</b> </span>
            </a>
        </li>
        <li class="nav-item menu-items mt-3">
            <a class="nav-link" href="{{ url('ViewComplainList') }}">
                {{-- <span class="menu-icon">

                </span> --}}
                <span class="menu-title "> <i class="fa-sharp fa-solid fa-eye"></i> <b>All Complains</b> </span>
            </a>

        @if (Route::has('login'))
            @auth
            <li class="nav-item menu-items mt-3">

                <a class="nav-link" href="{{url('SeeProfile')}}">
                    {{-- <span class="menu-icon">Profile

                        </span> --}}
                    <span class="menu-title "> <i class="fa-sharp fa-solid fa-user"> </i> <b>Profile</b></span>
                </a>
            </li>
                <li class="nav-item menu-items  mt-3">
                    <a class="nav-link" href="{{ url('logout') }}">
                        {{-- <span class="menu-icon">
{{ route('logout') }}
                </span> --}}
                        <span class="menu-title"> <i class="fa-solid fa-right-from-bracket"></i><b>Logout</b> </span>
                    </a>
                </li>
            @else
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ url('NewComplain') }}">
                        {{-- <span class="menu-icon">

                </span> --}}
                        <span class="menu-title"> <i class="fas fa-pen"></i> <b>Login</b> </span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ url('NewComplain') }}">
                        {{-- <span class="menu-icon">

                </span> --}}
                        <span class="menu-title"> <i class="fas fa-pen"></i> <b>Register</b> </span>
                    </a>
                </li>
            @endif
        @endauth
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="template/pages/ui-features/buttons.html">Buttons</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="template/pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="template/pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="template/pages/forms/basic_elements.html">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Form Elements</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="template/pages/tables/basic-table.html">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="template/pages/charts/chartjs.html">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="template/pages/icons/mdi.html">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="template/pages/samples/blank-page.html">
                            Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="template/pages/samples/error-404.html">
                            404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="template/pages/samples/error-500.html">
                            500 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="template/pages/samples/login.html"> Login
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="template/pages/samples/register.html">
                            Register </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link"
                href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li> --}}
    </ul>
</nav>
