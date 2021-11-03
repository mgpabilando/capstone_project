@extends('layouts.home')
@section('content')
<div id="content">
    @include('layouts.includes.topnavbar')
    <div class="row no-margin-padding">
        <div class="col-md-12 d-flex flex-row justify-content-between">
            <h3 class="block-title">Manage Account</h3>
        </div>
    </div>

    <div class="head-alert">
      <div class="head-func d-flex align-items-center justify-content-end">
          @if (\Session::has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ \Session::get('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
      </div>
  </div>

  <div class="container-fluid" style="height: auto">
    <div class="row d-flex">  
      <!--PROFILE PICTURE-->
      <div class="chooseprofile col-sm-3 justify-content-center">       
        <div class="text-center">
          <img src="images\profile.jpeg" class="rounded-circle" alt="admin-image" {{-- src="Auth::User()->picture "--}}>
          <h3 class="profile-username text-center admin_name">{{Auth::User()->fname}}</h3>
          <p class="text-muted text-center">Nurse</p>
          <input type="file" class="text-center center-block file-upload" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
          <a href="javascript:void(0)" class="btn btn-block btn-changepic" id="change_picture_btn"><b>Change picture</b></a>
        </div> 
      </div>

      {{-- User Profile/Information --}}
      <div class="user-info col-sm-8 text-center">
        <h4 style="text-align:center; font-weight:bold;">User Profile</h4>
        
          <hr>

        <ul class="nav nav-tabs" id="tab-next-prev" role="tablist" style="font-weight: bold">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#personal_info">Personal Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#account_info">Account Information</a>
          </li>
        </ul>

        <div class="tab-content">
          {{-- PERSONAL INFO --}}
          <div class="tab-pane active" id="personal_info">
            <form class="update-profile" action="{{route ('myprofile.update', '$user->id')}}" method="POST">
              @csrf
              @method('PUT')
              <div class="personal-info" style="background-color: white; padding:10px;">
                <div class="input-box">
                  <input name="user_id" id="user_id" placeholder="" value="{{ $user->id }}">
                </div>

                <div class="row row-space">               
                    <div class="form-group col-6">
                        <label class="control-label" for="fname">First Name:</label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $user->fname }}" disabled>
                        <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group col-6">
                        <label class="control-label" for="lname">Last Name:</label>
                        <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ $user->lname }}" disabled>
                        <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
                    </div>
                </div>

                <div class="row row-space"> 
                    <div class="form-group col-6">
                        <label class="control-label" for="address">Address:</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $user->address }}" disabled>
                        <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                    </div>

                    <div class="form-group col-6">
                        <label class="control-label" for="contact">Contact Number:</label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ $user->contact }}" disabled>
                        <span class="text-danger">@error('contact'){{ $message }} @enderror</span>
                    </div>
                </div>

                <div class="row row-space">
                    <div class="form-group col-6">
                        <label class="control-label" for="bdate">Birthdate:</label>
                        <input type="date" class="form-control @error('bdate') is-invalid @enderror" id="bdate" name="bdate" value="{{ $user->bdate }}" disabled>
                        <span class="text-danger">@error('birthdate'){{ $message }} @enderror</span>
                    </div>
                    
                    <div class="form-group col-6">
                        <label class="control-label" for="age">Age:</label>
                        <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ $user->age }}" disabled>
                        <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                    </div>
                </div>
              </div>
              <button type="submit" id="save" class="btn btn-danger" style="display: none;">Save Changes</button>
            </form>
            <button class="btn btn-edit" onclick="myFunction()" id="edit">Edit</button>
          </div> <!--/PERSONAL INFO-->
 
           {{-- ACCOUNT INFO --}}
          <div class="tab-pane fade" id="account_info">
            <form class="form-horizontal" action="" method="POST" id="changePasswordAdminForm">
              <div class="account-info" style="background-color: white; padding:10px;">
                <div class="form-group">
                    <label class="control-label" for="email">Email Address:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" disabled>
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                  <label class="control-label" for="oldpass">Old Password:</label>
                  <input type="password" class="form-control @error('oldpass') is-invalid @enderror" name="oldpass" disabled>
                  <span class="text-danger">@error('oldpass'){{ $message }} @enderror</span>
                </div>

                <hr>

                <div class="row row-space">
                  <div class="form-group col-6">
                      <label class="control-label" for="password">New Password:</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="newpassword" name="password" disabled>
                      <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                  </div>
                  
                  <div class="form-group col-6">
                      <label class="control-label" for="password_confirmation">Confirm New Password:</label>
                      <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" disabled>
                      <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                  </div> 

                  <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div> 
                </div>
              </div><!---account info-->
                <button type="submit" class="btn btn-danger" id="update" style="display: none">Update</button>
            </form>
            <button class="btn btn-edit" onclick="myFunction1()" id="editacc">Edit</button>
          </div><!--ACCOUNT INFO-->


          </div><!---tab-content-->
        
      </div><!--/user-info-->
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>

// function myFunction() {

//   var x = document.getElementById("edit");
//   var y = document.getElementById("save");
//   if (x.innerHTML === "Edit") {
//     x.innerHTML = "Cancel";
//     $("form input[type=text],form input[type=email],form input[type=date]").removeAttr("disabled");
//     y.style.display = "block";
//   } 
//   else {
//     x.innerHTML = "Edit";
//     y.style.display = "none";
//   }

  

// }
function myFunction() {
  $("form input[type=text],form input[type=email],form input[type=date]").prop("disabled",true);

var x = document.getElementById("edit");
var y = document.getElementById("save");

  if (x.innerHTML === "Edit") {
    x.innerHTML = "Cancel";
    $("form input[type=text],form input[type=email],form input[type=date]").removeAttr("disabled");
    y.style.display = "block";
    
      
  } 
  else {
    x.innerHTML = "Edit";
    y.style.display = "none";
  }
  };

  function myFunction1() {
  $("form input[type=email], form input[type=password]").prop("disabled",true);

var x = document.getElementById("editacc");
var y = document.getElementById("update");

  if (x.innerHTML === "Edit") {
    x.innerHTML = "Cancel";
    $("form input[type=email], form input[type=password]").removeAttr("disabled");
    y.style.display = "block";
  } 
  else {
    x.innerHTML = "Edit";
    y.style.display = "none";
  }
  };


 </script>
    
@endsection