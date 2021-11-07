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
        
    

    <script src="{{ asset('https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css') }}"></script>
    <script src="{{asset('jquery-ui-1.13.0.custom/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
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
    $(document).ready(function() { $('table.display').DataTable(); } );
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



{{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#hc-search-input').keyup(function() {
                var query = $(this).val();
                console.log(query);                
                if (query !='')
                    {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url:"{{ route('Consul.fetch') }}",
                            method:"POST",
                            data:{
                                query : query 
                                // '_token': 'X-CSRF-TOKEN',
                                // _token : _token
                            },
                                success:function(data)
                                {
                                    $('#residentlist').fadeIn();
                                    $('#residentlist').html(data);
                                }
                            })
                        }
                    });
                $(document).on('click', 'li', function(){
                    $('#fname').val($(this).text());
                    $('#residentlist').fadeOut();
                });
            });
</script> --}}


</body>
</html>

