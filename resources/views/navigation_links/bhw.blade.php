@extends('layouts.home')

@section('content')

<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Manage Accounts</h3>
        </div>
    </div>

    <div class="head-resprof">
        <div class="head-func d-flex justify-content-center">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ \Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container bhw-list bhms-box-shadow">
                    <div class="tabletitle-and-button d-flex">
                        <h3 class="bhwtable-title col-9">Barangay Health Workers</h3>
                        <div type="button" class="btn btn-add col-3" title="Add New User"  data-bs-toggle="modal" data-bs-target="#registerModal">
                            <i class="fa fa-plus"></i>&nbsp;Add
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="bhw-datatable" class="table table-bordered table-striped table-hover">
                            <thead>

                                <tr role="row">
                                    <th scope="col">ID</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Birthdate</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">ContactNo</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($bhws)
                                @foreach ($bhws as $bhw)
                                <tr>
                                    <th>{{$bhw->id}}</th>
                                    <td>{{$bhw->email}}</td>
                                    <td>{{$bhw->lname}}</td>
                                    <td>{{$bhw->fname}}</td>
                                    <td>{{$bhw->bdate}}</td>
                                    <td>{{$bhw->age}}</td>
                                    <td>{{$bhw->address}}</td>
                                    <td>{{$bhw->contact}}</td>
                                    <td>{{ date('F d, Y h:i:s a',strtotime($bhw['created_at'])) }}</td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-view bhw_view" data-bs-target="#viewbhw"
                                            data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}"
                                            data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}"
                                            data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}"> 
                                        <i class="manage fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-edit bhw_edit" data-bs-target="#editbhw"
                                            data-user_id="{{$bhw->id}}" data-fname="{{$bhw->fname}}" data-lname="{{$bhw->lname}}"
                                            data-email="{{$bhw->email}}" data-age="{{$bhw->age}}" data-contact="{{$bhw->contact}}"
                                            data-address="{{$bhw->address}}" data-bdate="{{$bhw->bdate}}" data-password="{{$bhw->password}}">                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-delete bhw_delete" data-bs-target="#deletebhw"
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
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form method="POST" action=" {{route('bhw.store')}}">
                        @csrf            
                        <div class="modal-body">
                            <div class="personal-info">
                                <p class="info-head text-center fw-bold">Personal Information</p>
        
                                <div class="row row-space">               
                                    <div class="form-group col-6">
                                        <label class="control-label" for="fname">First Name:</label>
                                        <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}">
                                        <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>
                                    </div>
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="lname">Last Name:</label>
                                        <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}">
                                        <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
                                    </div>
                                </div>
        
                                <div class="row row-space"> 
                                    <div class="form-group col-6">
                                        <label class="control-label" for="address">Address:</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                                        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                    </div>
        
                                    <div class="form-group col-6" {{ $errors->get('contact') ? 'has-error' : '' }}>
                                        <label class="control-label" for="contact">Contact Number:</label>
                                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact">
                                        <span class="text-danger">@error('contact'){{ $message }} @enderror</span>
                                        @foreach($errors->get('contact') as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    </div>
                                </div>
        
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="bdate">Birthdate:</label>
                                        <input type="date" class="form-control @error('bdate') is-invalid @enderror" id="bdate" name="bdate">
                                        <span class="text-danger">@error('birthdate'){{ $message }} @enderror</span>
                                    </div>
                                    
                                    <div class="form-group col-6">
                                        <label class="control-label" for="age">Age:</label>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age">
                                        <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
        
                            <hr>
                            <div class="account-info">
                                <p class="info-head text-center fw-bold">Account Information</p>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
        
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password">Password:</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password_confirmation">Confirm Password:</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                                        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                    </div> 
        
                                    <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                                </div>
                            </div>
                        </div>
        
                        <div class="modal-footer">
                                <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                          
                </div>
            </div>
        </div>
        <!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->  

        <!--**************************------------------- VIEW BHW MODAL -------------------****************************---------->   
        <div class="modal fade" id="viewbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="viewbhw" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form method="GET" action=" {{route('bhw.show', 'user_id')}}">
                        @csrf            
                        <div class="modal-body">
                            <div class="personal-info">
                                <p class="info-head text-center fw-bold">Personal Information</p>
                                <div class="input-box">
                                    <input name="user_id" id="user_id" type="text" placeholder="">
                                </div>
                                <div class="row row-space">               
                                    <div class="form-group col-6">
                                        <label class="control-label" for="fname">First Name:</label>
                                        <input class="name align-text-left" name="fname" id="fname" type="text" placeholder="" required readonly>
                                    </div>
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="lname">Last Name:</label>
                                        <input class="name align-text-left" name="lname" id="lname" type="text" placeholder="" required readonly>
                                    </div>
                                </div>
        
                                <div class="row row-space"> 
                                    <div class="form-group col-6">
                                        <label class="control-label" for="address">Address:</label>
                                        <input class="address align-text-left" name="address" id="address" type="text" placeholder="" required readonly>
                                    </div>
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="contact">Contact Number:</label>
                                        <input class="contact align-text-left" name="contact" id="contact" type="text" placeholder="" required readonly>
                                    </div>
                                </div>
        
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="bdate">Birthdate:</label>
                                        <input class="bdate align-text-left" name="bdate" id="bdate" type="date" placeholder="" required readonly>
                                    </div>
                                    
                                    <div class="form-group col-6">
                                        <label class="control-label" for="age">Age:</label>
                                        <input class="age align-text-left" name="age" id="age" type="text" placeholder="" required readonly>
                                    </div>
                                </div>
                            </div>
        
                            <hr>
                            <div class="account-info">
                                <p class="info-head text-center fw-bold">Account Information</p>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address:</label>
                                    <input class="email align-text-left" name="email" id="email" type="email" placeholder="" required readonly>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">Password:</label>
                                    <input class="password align-text-left" name="password" id="password" type="password" placeholder="" required readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                          
                </div>
            </div>
        </div>
        <!--**************************------------------- VIEW BHW MODAL ENDS HERE -------------------****************************---------->   

        <!--**************************------------------- EDIT BHW MODAL -------------------****************************---------->   
        <div class="modal fade" id="editbhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editbhw" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form method="POST" action=" {{route('bhw.update', 'user_id')}}">
                        @csrf 
                        @method('PUT')           
                        <div class="modal-body">
                            <div class="personal-info">
                                <p class="info-head text-center fw-bold">Personal Information</p>
                                <div class="input-box">
                                    <input name="user_id" id="user_id" type="text" placeholder="">
                                </div>
                                <div class="row row-space">               
                                    <div class="form-group col-6">
                                        <label class="control-label" for="fname">First Name:</label>
                                        <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname" name="fname" value="{{ old('fname') }}">
                                        <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>
                                    </div>
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="lname">Last Name:</label>
                                        <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname" name="lname" value="{{ old('lname') }}">
                                        <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
                                    </div>
                                </div>
        
                                <div class="row row-space"> 
                                    <div class="form-group col-6">
                                        <label class="control-label" for="address">Address:</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                                        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                    </div>
        
                                    <div class="form-group col-6" {{ $errors->get('contact') ? 'has-error' : '' }}>
                                        <label class="control-label" for="contact">Contact Number:</label>
                                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact">
                                        <span class="text-danger">@error('contact'){{ $message }} @enderror</span>
                                        @foreach($errors->get('contact') as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    </div>
                                </div>
        
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="bdate">Birthdate:</label>
                                        <input type="date" class="form-control @error('bdate') is-invalid @enderror" id="bdate" name="bdate">
                                        <span class="text-danger">@error('birthdate'){{ $message }} @enderror</span>
                                    </div>
                                    
                                    <div class="form-group col-6">
                                        <label class="control-label" for="age">Age:</label>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age">
                                        <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
        
                            <hr>
                            <div class="account-info">
                                <p class="info-head text-center fw-bold">Account Information</p>
                                <div class="form-group">
                                    <label class="control-label" for="email">Email Address:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                    <label class="control-label" for="password">Old Password:</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
        
                                <div class="row row-space">
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password">New Password:</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="newpassword" name="password">
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="control-label" for="password_confirmation">Confirm Password:</label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                                        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                    </div> 
        
                                    <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                                </div>
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
        <div class="res-delete modal fade" id="deletebhw" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletebhw" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete BHW Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="add-resident" action="{{route ('bhw.destroy', 'user_id')}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="modal-body delete_res">
                            <div class="input-box">
                                <input name="user_id" id="user_id" type="text" placeholder="">
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
    </div>
</div>
   
@endsection

@section("scripts")
<script>
    $(document).ready(function() {
    $('#bhw-datatable').DataTable( {
    } );
} );
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
        var password = button.data('password')

        var modal = $(this)
        modal.find('.modal-title').text('Edit Profile');
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

    {{-----------------------------DELETE BHW SCRIPT--------------------------------}}
<script>
    $('#deletebhw').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        

        var modal = $(this)
        modal.find('.modal-title').text(' Delete Profile');
        modal.find('.modal-body #user_id').val(user_id);
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