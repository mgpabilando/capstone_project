<div class="home-container">
    <nav id="sidebar" class="sidebar hms-bg active">
        <div class="sidebar-header">
            <img class="hms-logo"src="{{ asset ('images/HMS.png')}} ">
            <img class="stet-logo" src="{{ asset ('images/stethoscope.png')}} ">
        </div>

        <ul class="nav-links">
            <li class="">
                <a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="fa fa-home"></i>
                    <span class="link-name">Dashboard</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Dashboard</a></li>
                </ul>

            </li>

            <li class="">  
            <li class="">
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
 
            <li class=""> 
                <a class="link {{ Request::is('residentprofile') ? 'active' : '' }}" href="residentprofile">
                    <i class="fas fa-id-badge"></i>
                    <span class="link-name">Resident Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Resident Profile</a></li>
                </ul>
            </li>

            @if (Auth::user()->hasRole('admin_nurse')) 
            <li class="">  
            <li class="">
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}} 
            <li class=""> 
                <a class="{{ Request::is('bhw') ? 'active' : '' }}" href="bhw">
                    <i class="fa fa-address-card"></i>
                    <span class="link-name">BHWs</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">BHWs</a></li>
                </ul>
            </li>
            @endif

            <li class=""> 
                 
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Pregnant</a></li>
                    <li><a href="#">Deliveries</a></li>
                    <li><a href="#">EPI</a></li>
                    <li><a href="#">NTP</a></li>
                    <li><a href="#">Family Planning</a></li>
                    <li><a href="#">Control of Diarrheal Diseases</a></li>
                    <li><a href="#">Other Services</a></li>
                  </ul> --}} 
                <div class="icon-link d-flex ">
                    <a>
                        <i class="fas fa-heartbeat"></i>
                        <span class="link-name">Health Consultation</span>
                    </a>
                    <i class="fas fa-chevron-down arrow" style="font-size: 15px;"></i>
                </div>
                <ul class="sub-menu"> 
                    <li><a href="pregnancy">Pregnant</a></li>
                    <li><a href="deliveries">Deliveries</a></li>
                    <li><a href="epi">EPI</a></li>
                    <li><a href="ntp">NTP</a></li>
                    <li><a href="familyplanning">Family Planning</a></li>
                    <li><a href="diarrheal">Control of Diarrheal <br> Disease</a></li>
                    <li><a href="other">Other Services</a></li>
                 </ul>
            </li>

            <li class="">
                <a class="{{ Request::is('events') ? 'active' : '' }}" href="events">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="link-name">Events</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Events</a></li>
                </ul>
                
            </li>

            <li class="">
                <a class="{{ Request::is('purok') ? 'active' : '' }}" href="purok">
                    <i class="fa fa-map-marker-alt"></i>
                    <span class="link-name">Purok</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Purok</a></li>
                </ul>
            </li>

            <li class="">
                <a class="{{ Request::is('familynumbering') ? 'active' : '' }}" href="familynumbering">
                    <i class="fas fa-users"></i>
                    <span class="link-name">Family Numbering</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Family Numbering</a></li>
                </ul>
            </li>

            <li class="">
                <a class="{{ Request::is('medicinerequest') ? 'active' : '' }}" href="medicinerequest">
                    <i class="fa fa-capsules"></i>
                    <span class="link-name">Medicine Request</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Medicine Request</a></li>
                </ul>
            </li>

            <li class="">
                <a class="{{ Request::is('reports') ? 'active' : '' }}" href="reports">
                    <i class="fa fa-file-alt"></i>
                    <span class="link-name">Reports</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Reports</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
