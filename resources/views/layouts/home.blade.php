<!DOCTYPE html>
<html>
<head>
    @include('layouts.includes.head')
</head>
<body>
    <div class="wrapper">

    @include('layouts.includes.sidebar')
    @include('sweetalert::alert')
    
    @yield('content')
    
    
    </div>
    <script src="{{ asset ('js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/FullcalendarV5/lib/main.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> 
    {{-- <link href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.10.1/locales-all.min.js,npm/fullcalendar@5.10.1/locales-all.min.js"> --}}
    @yield('scripts')

<script>
    let sidebar = document.querySelector("#sidebar");
    let content = document.querySelector("#content");
    let sidebarBtn = document.querySelector(".fa-bars");
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
        content.classList.toggle("close");
    });
</script>

<script>
    $(document).ready(function() 
    { $('table.display').DataTable(); } 
    );
</script>

<script>
    $("ul li").click(function() {
        $('li').removeClass("active");
        $(this).addClass("active");
        });
</script>

<script>
    $(document).ready(function() {
    $('#datatable').DataTable( {
    } );
} );
</script>


</body>
</html>

