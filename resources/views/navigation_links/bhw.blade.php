@extends('layouts.home')

@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">BHW</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container bhw-list bhms-box-shadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold head-title pt-2 ps-2 mb-0 me-auto" style="text-align: center">Barangay Health Workers</h4>
                        @if(request()->has('view_deleted'))
                        <a href="{{ route('bhw.index') }}" class="btn btn-primary">View All</a>
                        @else
                        <button type="submit" class="btn btn-add me-2" title="Add New User" data-bs-toggle="modal" data-bs-target="#addbhwModal">
                            <i class="fas fa-user-plus"></i> Add</button>
                        @include('modals.BHW.Add')

                        <a href="{{ route('bhw.index', ['view_deleted' => 'DeletedRecords']) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Trash</a>

                        @endif
                    </div>

                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="bhw-datatable" class="table table-bordered table-striped table-hover">

                            <thead>
                                <tr role="row">
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">Full Name</th>
                                    <th class="text-center" scope="col">Email Address</th>
                                    <th class="text-center" scope="col">Contact Number</th>
                                    <th class="text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if($bhws)
                                @foreach ($bhws as $bhw)
                                <tr>
                                    <td data-label="ID">{{$bhw->id}}</td>
                                    <td data-label="Full Name">
                                        <p style="text-transform: capitalize; padding: 0px; margin: 0px;">{{$bhw->fname}} {{$bhw->lname}}</p>
                                    </td>
                                    <td data-label="E-mail" style="text-transform: lowercase;">{{$bhw->email}}</td>
                                    <td>{{ $bhw->contact }}</td>
                                    <td data-label="" style="white-space:nowrap; text-align:center; border-bottom: 1px solid black; border-top: 1px solid black;">
                                        @if (request()->has('view_deleted'))
                                        <a href="{{ route('bhws.restore', $bhw->id) }}" class="btn btn-success">Restore</a>
                                        <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-user_id="{{$bhw->id}}">Delete
                                        </a>
                                        @include('modals.BHW.PermanentDelete')
                                        @else
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-primary" data-bs-target="#viewbhw" data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}" data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}" data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">
                                            <i class="fas fa-eye"></i></a>
                                        @include('modals.BHW.Show')

                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-warning" data-bs-target="#editbhw" data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}" data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}" data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @include('modals.BHW.Edit')

                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-danger" data-bs-target="#deletebhw" data-user_id="{{$bhw->id}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        @include('modals.BHW.Delete')
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
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
    $(document).ready(function() {
        $("#newpass_confirm").keyup(CheckPasswordMatch);
    });
</script>
@endsection