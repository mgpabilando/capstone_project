<div class="home-container"> 
    <nav id="sidebar" class="hms-bg active">
        <div class="sidebar-header">
            <img class="hms-logo"src="{{ asset ('images/HMS.png')}} ">
            <img class="stet-logo" src="{{ asset ('images/stethoscope.png')}} ">
        </div>

        <ul class="nav-links"> 
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="fa fa-home"></i>
                    <span class="link-name">Dashboard</span> 
                </a>
                   
            </li>

            <li class="{{ Request::is('residentprofile') ? 'active' : '' }}">
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a class="link" href="residentprofile">
                    <i class="fas fa-id-badge"></i>
                    <span class="link-name">Resident Profile</span>
                </a>
            </li>

            <li class="{{ Request::is('bhw') ? 'active' : '' }}">
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="bhw">
                    <i class="fa fa-address-card"></i>
                    <span class="link-name">BHWs</span>
                </a>
            </li>

            <li class="{{ Request::is('healthconsultation') ? 'active' : '' }}">
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="healthconsultation" >
                    <i class="fas fa-heartbeat"></i>
                    <span class="link-name">Health Consultation</span>
                </a>
            </li>

            <li class="{{ Request::is('events') ? 'active' : '' }}">
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="events">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="link-name">Events</span>
                </a>
            </li>

            <li class="{{ Request::is('purok') ? 'active' : '' }}">
                <a href="purok"><i class="fa fa-map-marker-alt"></i><span class="link-name">Purok</span></a>
            </li>

            <li class="{{ Request::is('familynumbering') ? 'active' : '' }}">
                <a href="familynumbering"><i class="fa fa-child"></i><span class="link-name">Family Numbering</span></a>
            </li>

            <li class="{{ Request::is('medicinerequest') ? 'active' : '' }}">
                <a href="medicinerequest"><i class="fa fa-capsules"></i><span class="link-name">Medicine Request</span></a>
            </li>

            <li class="{{ Request::is('reports') ? 'active' : '' }}">
                <a href="reports"><i class="fa fa-file-alt"></i><span class="link-name">Report</span></a>
            </li>
        </ul>  
    </nav>
    {{-- TOP NAVIGATION --}}
    <section class="home-section">
        <nav class="navbar navbar-default d-flex">
            <div class="container-fluid d-flex align-items-center">
                <ul class="topnav-link">
                    <li>
                        <i class="fa fa-bars"></i>
                    </li>
                </ul>
                    <div class="account">
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
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
</div>   
