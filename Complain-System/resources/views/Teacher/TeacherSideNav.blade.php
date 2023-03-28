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
                <a href="{{ url('TeacherNewComplain') }}">New Complain</a>
            </li>
            <li>
                <a href="{{ url('TeacherViewComplains') }}">All Complains</a>
            </li>
            <li>
                <a href="{{ route('TeacherViewFeedback') }}">View Feedback</a>
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
