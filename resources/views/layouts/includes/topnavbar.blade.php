{{-- TOP NAVIGATION --}}
{{-- <section class="home-section">
    <nav class="navbar navbar-default d-flex">
        <div class="d-flex align-items-center">
            <ul class="topnav-link">
                <li>
                    <i class="fa fa-bars"></i>
                </li>
            </ul>
            <div class="account d-flex justify-content-end align-items-center">
                <img class="img-profile" width="40px" height="40px" src="{{ asset ('images/profile.jpeg')}} " alt="">
                <a href=""><i class="fa fa-user-circle"></i><span class="usernav-link">User Profile</span></a>
                <a href="/signout" onclick="event.preventDefault();
                document.getElementById('logout-form').submi t();"><i class="fa fa-power-off"></i>
                    <span class="usernav-link">Sign Out</span>
                </a>
                <form id="logout-form" action="signout" method="POST" style="display: none;">
                    @csrf
                </form>
        <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    </a>
                    <div class="dropdown-menu profile">
                        @auth <div>Hi! I'm<h5>{{ Auth::user()->fname }}</h5></div>@endauth

                    </div>
                </li>
            </div>

        </div>
    </nav>
</section> --}}

<style>
    .user-rounded-circle
    {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: 2px solid white;
        box-shadow: 1px 1px 5px 0px grey;
    }

    .fa-power-off
    {
        padding: 5px;
        margin: 0%;
        align-self: center;
        vertical-align: center;
        font-size: 20px;
        background-color: rgb(255, 255, 255);
        border-radius: 50%;
        border: 2px solid white;
        box-shadow: 1px 1px 5px 0px grey;

    }

    .account .topnav .usernav-link
    {
        align-items: center;
    }
    </style>
    <section class="home-section">
        <nav class="navbar navbar-default d-flex">
            <div class="d-flex align-items-center">
                <ul class="topnav-link">
                    <li>
                        <span class="fa fa-bars"></span>
                    </li>
                </ul>

                <div class="account d-flex justify-content-end align-items-center">
                    @auth <div style="font-size: 12px; color:#495057">Welcome! <br> <b style="font-size: 15px;  color:#2e2d2d">{{ Auth::user()->fname }}</b></div>@endauth
                    <a class="topnav me-2" href="myprofile" title="My Profile">
                        @if(Auth::User()->profile_image)
                        <img class="user-rounded-circle" src="{{asset('/storage/images/'.Auth::user()->profile_image)}}" alt="profile_image">
                        @endif
                    </a>

                    <a class="topnav" title="Log Out" href="/signout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                    </a>
                    <form id="logout-form" action="signout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            </div>
        </nav>
    </section>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
