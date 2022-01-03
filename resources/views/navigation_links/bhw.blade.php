@extends('layouts.home')

@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">BHW</h3>
        </div>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container bhw-list bhms-box-shadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold head-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">Barangay Health Workers</h4>
                        @if(request()->has('view_deleted'))
                                <a href="{{ route('bhw.index') }}" class="btn btn-primary">View All BHWs</a>
                        @else
                            <button type="submit" class="btn btn-add me-2" title="Add New User" data-bs-toggle="modal" data-bs-target="#addbhwModal">
                            <i class="fas fa-user-plus"></i> Add</button>
                            @include('modals.BHW.Add')

                            <a href="{{ route('bhw.index', ['view_deleted' => 'DeletedRecords']) }}"
                            class="btn btn-danger">Trash</a>
                            @include('modals.BHW.PermanentDelete')
                        @endif
                    </div>

                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="bhw-datatable" class="table table-bordered table-striped table-hover">
                            
                            <thead>
                                <tr role="row">
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">Email Address</th>
                                    <th class="text-center" scope="col">Last Name</th>
                                    <th class="text-center" scope="col">First Name</th>
                                    <th class="text-center" scope="col">Birthdate</th>
                                    <th class="text-center" scope="col">Age</th>
                                    <th class="text-center" scope="col">Address</th>
                                    <th class="text-center" scope="col">ContactNo</th>
                                    <th class="text-center" scope="col">Date Added</th>
                                    <th class="text-center" scope="col">Date Updated</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @if($bhws)
                                @foreach ($bhws as $bhw)
                                <tr>
                                    <th class="text-center" scope="col">{{$bhw->id}}</th>
                                    <td class="text-center" scope="col" style="text-transform: lowercase;">{{$bhw->email}}</td>
                                    <td class="text-center" scope="col">{{$bhw->lname}}</td>
                                    <td class="text-center" scope="col">{{$bhw->fname}}</td>
                                    <td class="text-center" scope="col">{{$bhw->bdate}}</td>
                                    <td class="text-center" scope="col">{{$bhw->age}}</td>
                                    <td class="text-center" scope="col">{{$bhw->address}}</td>
                                    <td class="text-center" scope="col">{{$bhw->contact}}</td>
                                    <td class="text-center" scope="col" style="text-transform: uppercase;">{{ date('F d, Y h:i:s a',strtotime($bhw['created_at'])) }}</td>
                                    <td class="text-center" scope="col" style="text-transform: uppercase;">{{ date('F d, Y h:i:s a',strtotime($bhw['updated_at'])) }}</td>
                                    <td style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                        @if (request()->has('view_deleted'))
                                                    <a href="{{ route('bhws.restore', $bhw->id) }}" class="btn btn-success">Restore</a>
                                                    <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal"  data-user_id="{{$bhw->id}}">Delete
                                                    </a>
                                        @else
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-primary bhw_view" data-bs-target="#viewbhw"
                                            data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}"
                                            data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}"
                                            data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">
                                        <i class="manage fas fa-eye"></i></a>
                                        @include('modals.BHW.Show')
                                    
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-warning bhw_edit" data-bs-target="#editbhw"
                                            data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}"
                                            data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}"
                                            data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">                                        
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                        @include('modals.BHW.Edit')
                                    
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-danger bhw_delete" data-bs-target="#deletebhw"
                                        data-user_id="{{$bhw->id}}">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
                                        @include('modals.BHW.Delete')
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <h1>hi</h1>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
<script>
    function CheckPasswordMatch() {
        var password = $("#newpass").val();
        var confirmPassword = $("#newpass_confirm").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
        else
            $("#CheckPasswordMatch").html("Passwords match.").css('color', 'green');
    }
        $(document).ready(function () {
            $("#newpass_confirm").keyup(CheckPasswordMatch);
        });
</script>

{{-----------------------------EDIT BHW SCRIPT--------------------------------}}
<script>
    $('#editbhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        var fname = button.data('fname')
        var lname = button.data('lname')
        var email = button.data('email')
        var age = button.data('age')
        var bdate = button.data('bdate')
        var address = button.data('address')
        var contact = button.data('contact')


        var modal = $(this)
        modal.find('.modal-title').text('Edit Profile');
        modal.find('.modal-body #edituser_id').val(user_id);
        modal.find('.modal-body #editfname').val(fname);
        modal.find('.modal-body #editlname').val(lname);
        modal.find('.modal-body #editemail').val(email);
        modal.find('.modal-body #editage').val(age);
        modal.find('.modal-body #editbdate').val(bdate);
        modal.find('.modal-body #editaddress').val(address);
        modal.find('.modal-body #editcontact').val(contact);
    }) ;
</script>

{{-----------------------------DELETE BHW SCRIPT--------------------------------}}
<script>
    $('#deletebhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')


        var modal = $(this)
        modal.find('.modal-title').text(' Delete Profile');
        modal.find('.modal-body #deleteuser_id').val(user_id);
    });
</script>

{{----------------------------- PERMANENT DELETE BHW SCRIPT--------------------------------}}
<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')


        var modal = $(this)
        modal.find('.modal-title').text(' Delete Profile');
        modal.find('.modal-body #deleteuser_id').val(user_id);
    p});
</script>

{{-----------------------------VIEW BHW SCRIPT--------------------------------}}
<script>
    $('#viewbhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        var fname = button.data('fname')
        var lname = button.data('lname')
        var email = button.data('email')
        var age = button.data('age')
        var bdate = button.data('bdate')
        var address = button.data('address')
        var contact = button.data('contact')
        var password = button.data('password')

        var modal = $(this)
        modal.find('.modal-title').text('View Profile');
        modal.find('.modal-body #user_id').val(user_id);
        modal.find('.modal-body #fname').val(fname);
        modal.find('.modal-body #lname').val(lname);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #age').val(age);
        modal.find('.modal-body #bdate').val(bdate);
        modal.find('.modal-body #address').val(address);
        modal.find('.modal-body #contact').val(contact);
        modal.find('.modal-body #password').val(password);
    });
</script>
@endsection
