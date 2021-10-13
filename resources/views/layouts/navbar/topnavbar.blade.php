{{-- TOP NAVIGATION --}}
<section class="home-section">
    <nav class="navbar navbar-default d-flex">
        <div class="d-flex align-items-center">
            <ul class="topnav-link">
                <li>
                    <i class="fa fa-bars"></i>
                </li>
            </ul>
            {{-- <div class="notification">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
            </div> --}}
            <div class="account">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <img class="img-profile" width="40px" height="40px" src="{{asset ('images/profile.jpeg') }}" alt="">
                    </a>   
                    <div class="dropdown-menu profile">
                        @auth <div>Hi! I'm<h5>{{ Auth::user()->fname }}</h5></div>@endauth
                        <a class="dropdown-item" href=""><i class="fa fa-user-circle"></i><span class="usernav-link">User Profile</span></a>
                        <a class="dropdown-item" href="/signout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                            <span class="usernav-link">Sign Out</span>
                        </a>
                        <form id="logout-form" action="signout" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
            </div>
            
        </div>            
    </nav>
</section>