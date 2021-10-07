<!DOCTYPE html>
<html>
<head>
    <title>BHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
    <link rel="stylesheet" href="css/style_dashboard.css">
    <link rel="icon" href="images\macawayan logo.png">
</head>
<body>
<div class="home-container"> 
    <nav id="sidebar" class="hms-bg active">
        <div class="sidebar-header">
            <img class="hms-logo"src="images/HMS.png">
            <img class="stet-logo" src="images/stethoscope.png">
        </div>

        <ul class="nav-links"> 
            <li>
                <a class="active" href="#">
                    <i class="fa fa-home"></i>
                    <span class="link-name">Dashboard</span> 
                </a>
                   
            </li>

            <li>
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="dashboard" :active="request()->routeIs('residentprofile')" >
                    <i class="fas fa-id-badge"></i>
                    <span class="link-name">Resident Profile</span>
                </a>
            </li>

            <li>
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span class="link-name">BHWs</span>
                </a>
            </li>

            <li>
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="health_consultation.php">
                    <i class="fas fa-heartbeat"></i>
                    <span class="link-name">Health Consultation</span>
                </a>
            </li>

            <li>
                {{-- <div class="icon-link">
                    <i class="fas fa-chevron-down"></i>
                </div> --}} {{--For drop down sub menu--}}
                <a href="event_db.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="link-name">Events</span>
                </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-map-marker-alt"></i><span class="link-name">Purok</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-child"></i><span class="link-name">Family Numbering</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-capsules"></i><span class="link-name">Medicine Request</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-file-alt"></i><span class="link-name">Report</span></a>
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
                                <img class="img-profile" width="40px" height="40px" src="images/profile.jpeg" alt="">
                            </a>   
                            <div class="dropdown-menu profile">
                                @auth<h5>{{ Auth::user()->fname }}</h5>@endauth
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

        @yield('content')  
        @yield('script')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-341.min.js"></script>

        

<script>
    let sidebar = document.querySelector("#sidebar");
    let sidebarBtn = document.querySelector(".fa-bars");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
    });
</script>
</html>

