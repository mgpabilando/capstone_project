<!DOCTYPE html>
<html>
<head>
    <title>BHMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/all.css') }}">
    <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resident_profile.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
</head>
<body>
         
        @yield('content')
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-341.min.js"></script>

        

<script>
    let sidebar = document.querySelector("#sidebar");
    let content = document.querySelector(".content");
    let hom_sec = document.querySelector(".home-section");
    let sidebarBtn = document.querySelector(".fa-bars");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
        content.classList.toggle("close");
        hom_sec.classList.toggle("close");
    });
</script>

<script>
    $("ul li").click(function() {
        $('li').removeClass("active");
        $(this).addClass("active");
        });
        
</script>


</body>
</html>

