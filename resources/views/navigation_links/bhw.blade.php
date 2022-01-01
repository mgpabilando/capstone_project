@extends('layouts.home')

@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">BHW</h3>
        </div>
    </div>

    {{-- <div class="head-resprof">
        <div class="head-func d-flex justify-content-center">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
                </ul>
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{session('error')}}
            </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container bhw-list bhms-box-shadow">

                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="fw-bold head-title pt-2 ps-2 mb-0" style="text-align: center">Barangay Health Workers</h4>
                        <button type="submit" class="btn btn-add" title="Add New User" data-bs-toggle="modal" data-bs-target="#addbhwModal">
                            <i class="fas fa-user"></i> 
                            Add
                        </button>
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
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-primary bhw_view" data-bs-target="#viewbhw"
                                            data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}"
                                            data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}"
                                            data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">
                                        <i class="manage fas fa-eye"></i></a>
                                    
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-warning bhw_edit" data-bs-target="#editbhw"
                                            data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}"
                                            data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}"
                                            data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">                                        
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                    
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn btn-danger bhw_delete" data-bs-target="#deletebhw"
                                        data-user_id="{{$bhw->id}}">
                                        <i class="manage fas fa-trash"></i>
                                        </a>
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

        <!--******************************-------------- ADD BHW MODAL ------------*************************************-->
        <div class="bhw-add modal fade" id="addbhwModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addbhwModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center"  style="background-color: #2ae88a;
                    color: #ffffff">
                        <h5 class="modal-title" id="addbhwModal">{{ __('CREATE ACCOUNT') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                        
                    </div>
                    <form class="bhw-modal"  method="POST" action=" {{route('bhw.store')}}">
                        @csrf
                        <div class="modal-body">
                            <div class="personal-info">
                                <p class="info-head text-center fw-bold">Personal Information</p>
                        
                                <div class="row row-space">               
                                    <div class="form-group col-6">
                                        <label class="control-label" for="fname">First Name:</label>
                                        <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                                        <span class="invalid-feedback" role="alert" id="fnameError">
                                            <strong></strong>
                                        </span>
                                    </div>
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="lname">Last Name:</label>
                                        <input type="text" class="form-control"name="lname" value="{{ old('lname') }}">
                                        <span class="invalid-feedback" role="alert" id="lnameError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
        
                                <div class="row row-space"> 
                                    <div class="form-group col-6">
                                        <label class="control-label" for="address">Address:</label>
                                        <input type="text" class="form-control" name="address">
                                        <span class="invalid-feedback" role="alert" id="addressError">
                                            <strong></strong>
                                        </span>
                                    </div>
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="contact">Contact Number:</label>
                                        <input type="text" class="form-control" name="contact">
                                        <span class="invalid-feedback" role="alert" id="contactError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
        
                                <div class="row row-space">
                                    <div class="col-6">
                                        <label class="control-label" for="bdate">Birthdate:
                                        <input type="date" class="form-control" name="bdate"></label>
                                        <span class="invalid-feedback" role="alert" id="bdateError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                    
                                    <div class="form-group col-6">
                                        <label class="control-label" for="age">Age:</label>
                                        <input type="number" class="form-control" name="age">
                                        <span class="invalid-feedback" role="alert" id="ageError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
        
                            <hr>
                            <div class="account-info">
                                <p class="info-head text-center fw-bold">Account Information</p>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address:</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong></strong>
                                    </span>
                                </div>
        
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password">Password:</label>
                                        <input type="password" class="form-control" name="password" id="newpass">
                                        <span class="invalid-feedback" role="alert" id="passwordError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password_confirmation">Confirm Password:</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="newpass_confirm">
                                        <span class="invalid-feedback" role="alert" id="password_confirmationError">
                                            <strong></strong>
                                        </span>
                                    </div> 
        
                                    <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                                </div>
        
                            </div>
                        </div>
        
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->

        <!--**************************------------------- VIEW BHW MODAL -------------------****************************---------->
        <div class="bhw-view modal fade" id="viewbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="viewbhw" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form class="bhw-modal"  method="GET" action=" {{route('bhw.show', 'user_id')}}">
                        @csrf
                        <div class="modal-body">
                            <div class="personal-info">
                                <p class="info-head text-center fw-bold">Personal Information</p>
                                <div class="input-box">
                                    <input name="user_id" id="user_id" type="hidden" placeholder="">
                                </div>
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="fname">First Name:</label><br>
                                        <input class="name align-text-left" id="fname" name="fname" type="text" placeholder="" required readonly>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="control-label" for="lname">Last Name:</label><br>
                                        <input class="name align-text-left" id="lname" name="lname" type="text" placeholder="" required readonly>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="address">Address:</label><br>
                                        <input class="address align-text-left" id="address" name="address" type="text" placeholder="" required readonly>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="control-label" for="contact">Contact Number:</label><br>
                                        <input class="contact align-text-left" id="contact" name="contact" type="text" placeholder="" required readonly>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="col-6">
                                        <label class="control-label" for="bdate">Birthdate:</label><br>
                                        <input class="bdate align-text-left" id="bdate" name="bdate" type="date" placeholder="" required readonly>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="control-label" for="age">Age:</label><br>
                                        <input class="age align-text-left" id="age" name="age" type="text" placeholder="" required readonly>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="account-info">
                                <p class="info-head text-center fw-bold">Account Information</p>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address:</label><br>
                                    <input class="email align-text-left" id="email" name="email" type="email" placeholder="" required readonly>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password:</label><br>
                                    <input class="password align-text-left" id="password" name="password" type="password" placeholder="" required readonly>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--**************************------------------- VIEW BHW MODAL ENDS HERE -------------------****************************---------->

        <!--**************************------------------- EDIT BHW MODAL -------------------****************************---------->
        <div class="bhw-edit modal fade" id="editbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editbhw" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="editbhw">{{ __('CREATE ACCOUNT') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form class="bhw-modal"  method="POST" action=" {{route('bhw.update', 'user_id')}}">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="personal-info">
                                <p class="info-head text-center fw-bold">Personal Information</p>
                                <div class="input-box">
                                    <input name="user_id" id="edituser_id" type="hidden" placeholder="">
                                </div>
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="fname">First Name:</label><br>
                                        <input type="text" class="form-control" id="editfname" name="fname" value="{{ old('fname') }}">
                                        <span class="invalid-feedback" role="alert" id="bhwfnameError">
                                            <strong></strong>
                                        </span>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="control-label" for="lname">Last Name:</label><br>
                                        <input type="text" class="form-control" id="editlname" name="lname" value="{{ old('lname') }}">
                                        <span class="invalid-feedback" role="alert" id="bhwlnameError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="address">Address:</label><br>
                                        <input type="text" class="form-control" id="editaddress" name="address">
                                        <span class="invalid-feedback" role="alert" id="bhwaddressError">
                                            <strong></strong>
                                        </span>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="control-label" for="contact">Contact Number:</label><br>
                                        <input type="number" class="form-control" id="editcontact" name="contact">
                                        <span class="invalid-feedback" role="alert" id="bhwcontactError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="col-6">
                                        <label class="control-label" for="bdate">Birthdate:</label><br>
                                        <input type="date" class="form-control" id="editbdate" name="bdate">
                                        <span class="invalid-feedback" role="alert" id="bhwbdateError">
                                            <strong></strong>
                                        </span>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="control-label" for="age">Age:</label><br>
                                        <input type="number" class="form-control" id="editage" name="age">
                                        <span class="invalid-feedback" role="alert" id="bhwageError">
                                            <strong></strong>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="account-info">
                                <p class="info-head text-center fw-bold">Account Information</p>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address:</label><br>
                                    <input type="email" class="form-control" id="editemail" name="email" value="{{ old('email') }}">
                                    <span class="invalid-feedback" role="alert" id="bhwemailError">
                                        <strong></strong>
                                    </span>
                                    {{-- <label class="control-label" for="password">Old Password:</label><br>
                                    <input class="password align-text-left" id="password" name="password" type="password" placeholder="" required readonly>
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span> --}}
                                </div>

                                {{-- <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password">New Password:</label><br>
                                        <input type="password" class="form-control @error('newpassword') is-invalid @enderror" id="newpassword" name="newpassword">
                                        <span class="text-danger">@error('newpassword'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password_confirmation">Confirm Password:</label><br>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="editpassword_confirmation" name="password_confirmation">
                                        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-warning waves-effect" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Update Data</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--**************************------------------- EDIT MODAL ENDS HERE-------------------****************************---------->

        <!--**************************------------------- DELETE BHW MODAL -------------------****************************---------->
        <div class="bhw-delete modal fade" id="deletebhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletebhw" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete BHW Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="bhw-modal"  class="delete_bhw" action="{{route ('bhw.destroy', 'user_id')}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="modal-body">
                            <div class="input-box">
                                <input name="user_id" id="deleteuser_id" type="hidden" placeholder="">
                            </div>
                            <h5>Are you sure you want to delete this?</h5>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger waves-effect" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--**************************------------------- DELETE MODAL ENDS HERE-------------------****************************---------->
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
        }) ;

</script>

@endsection
