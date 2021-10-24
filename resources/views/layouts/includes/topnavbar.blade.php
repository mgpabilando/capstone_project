{{-- TOP NAVIGATION --}}
{{-- <section class="home-section">
    <nav class="navbar navbar-default d-flex">
        <div class="d-flex align-items-center">
            <ul class="topnav-link">
                <li>
                    <i class="fa fa-bars"></i>
                </li>
            </ul>
            <div class="account d-flex justify-content-end">
                <img class="img-profile" width="40px" height="40px" src="{{asset ('images/profile.jpeg') }}" alt="">
                <a href=""><i class="fa fa-user-circle"></i><span class="usernav-link">User Profile</span></a>
                <a href="/signout" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
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
<section class="home-section">
    <nav class="navbar navbar-default d-flex">
        <div class="d-flex align-items-center">
            <ul class="topnav-link">
                <li>
                    <span class="fa fa-bars"></span>
                </li>
            </ul>

            <div class="account d-flex justify-content-end">
                <a class="topnav me-2" href="myprofile"><i class="fa fa-user-circle pe-1 h5"></i><span class="usernav-link">User Profile</span></a>
                <a class="topnav" href="/signout" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off pe-1 h5"></i>
                    <span class="usernav-link">Sign Out</span>
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