@extends('layouts.home')

@section('content')

<style>
.modal-content {
 margin: 25px auto; /* 5% from the top, 15% from the bottom and centered */
 border: 2px solid #888;
 width: 45%; /* Could be more or less, depending on screen size */
 font-size: 12px;
 border-radius: 10px;
  
}

.modal .modal-title{
 color:#000000;  
 font-weight: bold;
 position: absolute;
 margin: 10px;
 width: 90%;
}

.modal-body {
 margin: 0px 20px;
 position: relative;

}

/* Full-width input fields */
.modal input[type=text], .modal input[type=password], .modal input[type=date], .modal input[type=email]{
 width: 100%;
 padding: 5px 20px;
 margin: 5px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
 font-size: 12px;
 border-radius: 25px;

}


/* Set a style for all buttons */
/* .modal .modal-content .btn {
 background:linear-gradient(-45deg, #2ae88a 0%, #08aeea 100%) border-box;
 border-radius: 25px;  
 color: white;
 padding: 5px 20px;
 border: none;
 cursor: pointer;
 width: 50%;
 opacity: 0.9;
} */

.modal-content .modal-body select{
 width: 100%;
 border-radius: 25px;
 padding: 5px 20px;
 margin: 0px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
 font-size: 14px;
}

.modal .modal-content .control-label{
    text-transform: uppercase;
  font-weight: 600;
  margin-top: 3px;
  color: rgb(90, 90, 90);
 
}

.row-space  {
 justify-content: space-between;
}

.row {
 display: flex;
 justify-content: center;
}

.modal .modal-content .info-head{
 position: absolute;
 transform: rotate(-90deg) translateX(-45px) translateY(-120px);
 background-color: #2ae88a;
 padding: 8px 10px; 
 border-radius: 5px;
 color: #ffffff;
}
</style>

<div id="content">
    <section class="home-section">
        <nav class="navbar navbar-default d-flex">
            <div class="d-flex align-items-center">
                <ul class="topnav-link">
                    <li>
                        <span class="fa fa-bars"></span>
                    </li>
                </ul>

                <div class="account">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <img class="img-profile" width="40px" height="40px" src="{{asset ('images/profile.jpeg') }}" alt="">
                        </a>   
                        <div class="dropdown-menu profile">
                            @auth <div>Hi! I'm<h5>{{ Auth::user()->fname }}</h5></div>@endauth
                            <a class="dropdown-item" href=""><i class="fa fa-user-circle"></i><span class="usernav-link">User Profile</span></a>
                            <a class="dropdown-item" href="/signout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                <span class="usernav-link">Sign Out</span>
                            </a>
                            <form id="logout-form" action="signout" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>
                </div>
                
            </div>            
        </nav>

        <div class="row no-margin-padding">
            <div class="col-md-12 d-flex flex-row justify-content-between">
                <h3 class="block-title">Manage Accounts</h3>
                <div type="button" class="btn-add-res d-flex justify-content-center" title="Add New User"  data-bs-toggle="modal" data-bs-target="#registerModal">
                    <i class="fas fa-user-plus"></i>&nbsp;Add New
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="consultation-list bhms-box-shadow">
                    <h3 class="consulttable-title">BHWs</h3>
                    <hr>
                    <div class="table-responsive mb-3">
                        <table id="consultdatatable" class="table table-bordered table-striped">
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
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($users)
                                @foreach ($users as $bhw)
                                <tr>
                                    <th>{{$bhw->id}}</th>
                                    <td>{{$bhw->email}}</td>
                                    <td>{{$bhw->lname}}</td>
                                    <td>{{$bhw->fname}}</td>
                                    <td>{{$bhw->bdate}}</td>
                                    <td>{{$bhw->age}}</td>
                                    <td>{{$bhw->address}}</td>
                                    <td>{{$bhw->contact}}</td>
                                    <td>
                                        {{-----***************************** SHOW BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_view" data-bs-target="#viewnewconsultation">
                                        <i class="manage fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        {{-----***************************** EDIT BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_edit" data-bs-target="#editnewconsultation">
                                        <i class="manage fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{-----***************************** DELETE BUTTON *******************************------}}
                                        <a data-bs-toggle="modal" type="button" class="btn-action consul_delete" data-bs-target="#deletenewconsultation">
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

        <!--******************************-------------- ADD bhw MODAL ------------*************************************-->   
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
        
                                    <div class="form-group col-6">
                                        <label class="control-label" for="contact">Contact Number:</label>
                                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact">
                                        <span class="text-danger">@error('contact'){{ $message }} @enderror</span>
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
                                <button type="submit" class="btn btn-success">Add Resident</button>
                        </div>
                    </form>
                          
                </div>
            </div>
        </div>
        <!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->  

        <!--**************************------------------- VIEW CONSULTATION MODAL -------------------****************************---------->   
        <!--**************************------------------- VIEW CONSULTATION MODAL ENDS HERE -------------------****************************---------->   

        <!--**************************------------------- EDIT CONSULTATION MODAL -------------------****************************---------->   

    </div>
</div>
   
@endsection