 <style>
     .modal-content {
  margin: 25px auto; /* 5% from the top, 15% from the bottom and centered */
  border: 2px solid #888; /* Could be more or less, depending on screen size */
  font-size: 12px;
  border-radius: 10px;
  width:  80%;
   
}

.modal .modal-title{ 
  position: absolute;
  margin: 10px;
  width: 90%;
}

.modal-body {
  margin: 0px 20px;
  position: relative;

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

 .modal input[type=password], .modal input[type=email], .modal input[type=number]{
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

.  {
  justify-content: space-between;
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="register" {{-- id="registerForm" --}}>
                @csrf            
                <div class="modal-body m-2">
                    <div class="personal-info d-flex flex-wrap">
                        <p class="info-head text-center fw-bold">Personal Information</p>

                        <div class="row d-flex flex-wrap">               
                            <div class=" d-flex flex-wrap col-md-6">
                                <label class="control-label" for="fname">First Name:</label>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                                <span class="invalid-feedback" role="alert" id="fnameError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class=" d-flex flex-wrap col-md-6">
                                <label class="control-label" for="lname">Last Name:</label>
                                <input type="text" class="form-control"name="lname" value="{{ old('lname') }}">
                                <span class="invalid-feedback" role="alert" id="lnameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row d-flex flex-wrap "> 
                            <div class=" d-flex flex-wrap col-md-6">
                                <label class="control-label" for="address">Address:</label>
                                <input type="text" class="form-control" id="address" name="address">
                                <span class="invalid-feedback" role="alert" id="addressError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class=" d-flex flex-wrap col-md-6">
                                <label class="control-label" for="contact">Contact Number:</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                                <span class="invalid-feedback" role="alert" id="contactError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row ">
                            <div class=" d-flex flex-wrap col-md-6">
                                <label class="control-label" for="bdate">Birthdate:</label>
                                <input type="date" class="form-control" id="bdate" name="bdate">
                                <span class="invalid-feedback" role="alert" id="bdateError">
                                    <strong></strong>
                                </span>
                            </div>
                            
                            <div class=" d-flex flex-wrap col-md-6">
                                <label class="control-label" for="age">Age:</label>
                                <input type="number" class="form-control" id="age" name="age">
                                <span class="invalid-feedback" role="alert" id="ageError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="account-info d-flex flex-wrap">
                        <p class="info-head text-center fw-bold">Account Information</p>
                        <div class=" d-flex flex-wrap col-12">
                            <label class="control-label" for="email">Email Address:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="invalid-feedback" role="alert" id="emailError">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="row d-flex flex-wrap ">
                            <div class="col-md-6">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <span class="invalid-feedback" role="alert" id="passwordError">
                                    <strong></strong>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="password_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                <span class="invalid-feedback" role="alert" id="password_confirmationError">
                                    <strong></strong>
                                </span>
                            </div> 

                            <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                        </div>

                        
                        <div class="row d-flex flex-wrap">
                            <div class="col-12">
                                <label class="control-label" for="role-id">Register as:</label>
                                <select name="role_id">
                                    <option selected>Choose...</option>
                                    <option value="admin_nurse">Nurse</option>
                                    <option value="bhw">Barangay Health Worker</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-block">SIGN UP</button>
                    
                </div>
            </form>
                  
        </div>
    </div>
</div>
@section ('scripts')
    <script>
        $('#registerModal').on('hidden.bs.modal', function () {
            $('#registerModal form')[0].reset();
            });
    </script>
    
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