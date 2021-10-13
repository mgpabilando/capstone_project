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
</div>   
