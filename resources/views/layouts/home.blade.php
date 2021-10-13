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
    <link rel="stylesheet" type="text/css" href="{{asset('https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css')}}">    
    <link rel="icon" href="{{ asset ('images\macawayan logo.png') }}">
    
</head>
<body>
         
        @yield('content')
    
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js')}}"></script>
   
<script>
    let sidebar = document.querySelector("#sidebar");
    let content = document.querySelector(".content");
    let hom_sec = document.querySelector(".home-section");
    let sidebarBtn = document.querySelector(".fa-bars");
    /* console.log(sidebarBtn); */
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

<script>
    $(document).ready(function() {
    $('#datatable').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>


{{-- <script>
    $(document).ready( function () {
        $('.view').click(function() {
            const id = $(this).attr('data-id');
            console.log(id);

            $.ajax({
                url: 'residentprofile' + id,
                type: 'GET',
                data: {
                    "id": id
                },
                success:function(data) {
                    console.log(id);
                }
            })

        });
    });
</script>
 --}}

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
        modal.find('.modal-title').text('Edit resident Profile');
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

<script>
    $('#deleteResidentModal').on('show.bs.modal', function(event) {
       var button = $(event.relatedTarget)
       var resident_id = button.data('resident_id')
       

       var modal = $(this)
       modal.find('.modal-title').text(' Delete Resident Profile');
       modal.find('.modal-body #resident_id').val(resident_id);
    })
    
</script>
</body>
</html>

