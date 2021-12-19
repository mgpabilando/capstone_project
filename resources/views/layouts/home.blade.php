<!DOCTYPE html>
<html>
<head>
    @include('layouts.includes.head')
</head>
<body>
    <div class="wrapper">

    @include('layouts.includes.sidebar')
    
    @yield('content')
    
    </div>
    <script src="{{ asset ('js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/FullcalendarV5/lib/main.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> 
    {{-- <link href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.10.1/locales-all.min.js,npm/fullcalendar@5.10.1/locales-all.min.js"> --}}
    <script src="{{ asset('js/pregnancy.js') }}"></script>
    @include('sweetalert::alert')
    @yield('scripts')
    

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
            localStorage.setItem("showMenu", arrowParent.classList.contains("showMenu"));
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let content = document.querySelector("#content");
    let sidebarBtn = document.querySelector(".fa-bars");

    if (localStorage.getItem("close") == "true")
    {
        sidebar.classList.add("close");
        content.classList.add("close");
    }
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
        content.classList.toggle("close");
        localStorage.setItem("close", sidebar.classList.contains("close"));

    });

    $("ul li").click(function() {
        $('li').removeClass("active");
        $(this).addClass("active");
        });
</script>


<script>
    $(document).ready(function() 
    { $('table.display').DataTable(); } 
    );
</script>

<script>
    $(document).ready(function() {
    $('#datatable').DataTable( {
    } );
} );
</script>

</body>
</html>

