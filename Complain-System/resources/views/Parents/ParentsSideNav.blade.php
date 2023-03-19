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
                <a href="{{ url('ParentsNewComplain') }}">New Complain</a>
            </li>
            <li>
                <a href="{{ url('ParentsViewComplains') }}">All Complains</a>
            </li>
            <li>
                <a href="{{ url('ApplyForVisitCampus') }}">Apply for visting pass</a>
            </li>
            <li>
                <a href="{{ url('CheckForVisitCampus') }}">Check Visiting Pass</a>
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
