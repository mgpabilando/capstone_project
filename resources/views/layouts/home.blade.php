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
        
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{asset('jquery-ui-1.13.0.custom/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js')}}"></script>

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

<script>
    $(document).ready(function() {
    $('#consultdatatable').DataTable( {
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

<!-- Script -->




    {{-----------------------------EDIT RESIDENT SCRIPT--------------------------------}}
 <script>
     $('#editResidentModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var resident_id = button.data('resident_id')
        var fname = button.data('fname')
        var lname = button.data('lname')
        var mname = button.data('mname')
        var purok = button.data('purok')
        var age = button.data('age')
        var bdate = button.data('bdate')
        var placeofbirth = button.data('placeofbirth')
        var family_id = button.data('family_id')
        var phil_health_id = button.data('phil_health_id')
        var id_4ps = button.data('id_4ps')
        var mobile = button.data('mobile')
        var sex = button.data('sex')
        var civil_status = button.data('civil_status')

        var modal = $(this)
        modal.find('.modal-title').text('Edit Resident Profile');
        modal.find('.modal-body #resident_id').val(resident_id);
        modal.find('.modal-body #purok').val(purok);
        modal.find('.modal-body #family_id').val(family_id);
        modal.find('.modal-body #fname').val(fname);
        modal.find('.modal-body #mname').val(mname);
        modal.find('.modal-body #lname').val(lname);
        modal.find('.modal-body #age').val(age);
        modal.find('.modal-body #bdate').val(bdate);
        modal.find('.modal-body #placeofbirth').val(placeofbirth);
        modal.find('.modal-body #sex').val(sex);
        modal.find('.modal-body #civil_status').val(civil_status);
        modal.find('.modal-body #mobile').val(mobile);
        modal.find('.modal-body #phil_health_id').val(phil_health_id);
        modal.find('.modal-body #id_4ps').val(id_4ps);
        }) 
</script>

    {{-----------------------------DELETE RESIDENT SCRIPT--------------------------------}}
<script>
    $('#deleteResidentModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var resident_id = button.data('resident_id')
        

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Resident Profile');
        modal.find('.modal-body #resident_id').val(resident_id);
    })
    
</script>

    {{-----------------------------VIEW RESIDENT SCRIPT--------------------------------}}
<script>
    $('#viewResidentModal').on('show.bs.modal', function(event) {
       var button = $(event.relatedTarget)
       var resident_id = button.data('resident_id')
       var fname = button.data('fname')
       var lname = button.data('lname')
       var mname = button.data('mname')
       var purok = button.data('purok')
       var age = button.data('age')
       var bdate = button.data('bdate')
       var placeofbirth = button.data('placeofbirth')
       var family_id = button.data('family_id')
       var phil_health_id = button.data('phil_health_id')
       var id_4ps = button.data('id_4ps')
       var mobile = button.data('mobile')
       var sex = button.data('sex')
       var civil_status = button.data('civil_status')

       var modal = $(this)
       modal.find('.modal-title').text('RESIDENT PROFILE');
       modal.find('.modal-body #resident_id').val(resident_id);
       modal.find('.modal-body #purok').val(purok);
       modal.find('.modal-body #family_id').val(family_id);
       modal.find('.modal-body #fname').val(fname);
       modal.find('.modal-body #mname').val(mname);
       modal.find('.modal-body #lname').val(lname);
       modal.find('.modal-body #age').val(age);
       modal.find('.modal-body #bdate').val(bdate);
       modal.find('.modal-body #placeofbirth').val(placeofbirth);
       modal.find('.modal-body #sex').val(sex);
       modal.find('.modal-body #civil_status').val(civil_status);
       modal.find('.modal-body #mobile').val(mobile);
       modal.find('.modal-body #phil_health_id').val(phil_health_id);
       modal.find('.modal-body #id_4ps').val(id_4ps);
    })
    
</script>
</body>
</html>

