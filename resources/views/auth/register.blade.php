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

.modal-footer{
  justify-content: center;
  background-color: white;  
  display: flex;
}

/* Full-width input fields */
.modal input[type=text] {
  width: 100%;
  padding: 5px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 12px;
  border-radius: 10px;
  text-transform: capitalize;
}

 .modal input[type=password], .modal input[type=email]{
  width: 100%;
  padding: 5px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 12px;
  border-radius: 10px;
  text-transform: lowercase;
 }

 .modal input[type=date]{
  width: 100%;
  padding: 5px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 12px;
  border-radius: 10px;
  text-transform: uppercase;
 }

/* Set a style for all buttons */
.modal .modal-content .btn {
  background:linear-gradient(-45deg, #2ae88a 0%, #08aeea 100%) border-box;
  border-radius: 25px;  
  color: white;
  padding: 5px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.modal-content .modal-body select{
  width: 100%;
  border-radius: 10px;
  padding: 5px 20px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 14px;
}

.modal .modal-content .control-label{
  color: #000000;
  
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
  transform: rotate(-90deg) translateX(-70px) translateY(-120px);
  background-color: #2ae88a;
  padding: 8px 10px; 
  border-radius: 5px;
  color: #ffffff;
}
 </style>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="register" {{-- id="registerForm" --}}>
                
                @if(Session::has('successful'))
                <div class="alert alert-success">
                    {{ Session::get('successful') }}
                    @php
                        Session::forget('successful');
                    @endphp
                </div>
                @endif

                
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

                        

                        <div class="form-group">
                            <label class="control-label" for="role-id">Register as:</label>
                            <select name="role_id">
                                <option selected>Choose...</option>
                                <option value="admin_nurse">Nurse</option>
                                <option value="bhw">Barangay Health Worker</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-block">SIGN UP</button>
                    
                </div>
            </form>
                  
        </div>
    </div>
</div>
@section ('scripts')
    <script>
    function CheckPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirmation").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
        else
            $("#CheckPasswordMatch").html("Passwords match.").css('color', 'green');
    }
        $(document).ready(function () {
            $("#password_confirmation").keyup(CheckPasswordMatch);
        });

    </script>
@endsection