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
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="{{ asset('js/MARprint.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/MVRprint.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/medrequestPrint.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/print.js') }}" charset="utf-8"></script>

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

