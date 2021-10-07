<!DOCTYPE html>
<html>
<head>
    <title>BHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/all.css">
    <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
</head>
<body>
        @include('layouts.navigation')
        <div class="container">
        @yield('content')
        </div>
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

