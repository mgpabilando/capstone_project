<div class="modal fade" id="registerModal" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
            </div>
            <form method="POST" action="register" id="registerForm">
                @csrf
                <div class="modal-body mb-0">
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
                                <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
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
                                <input type="text" class="form-control" id="contact" name="contact" pattern="[0-9]{11}" placeholder="09123456789" maxlength="11" title="Input valid mobile number." required>
                                <span class="invalid-feedback" role="alert" for="contact">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row">
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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row d-flex flex-wrap ">
                            <div class="col-md-6">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
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

                            <div id="message">
                                <h6 style="font-weight: 500">Password must contain the following:</h6>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>6 characters</b></p>
                            </div>

                            <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                        </div>

                        
                        <div class="row d-flex flex-wrap col-12">
                            <div class="">
                                <label class="control-label" for="role-id">Register as:</label>
                                <select name="role_id" required>
                                    <option>Choose</option>
                                    <option value="admin_nurse">Nurse</option>
                                    <option value="bhw">Barangay Health Worker</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">SIGN UP</button>
                <style>
                .btn-outline-success {
                    color: #15c5c4;
                    border-color: #15c5c4;
                }
                .btn-outline-success:hover {
                    color: #fff;
                    background-color: #15c5c4;
                    border-color: #15c5c4;
                }
                .btn-success{
                    color: #fff;
                    background-color: #15c5c4;
                    border-color: #15c5c4;
                }

                .btn-success:hover {
                    color: #fff;
                    background-color: #13afaf;
                    border-color: #15c5c4;
                }
                
                </style>
                
                </div>
            </form>
        </div>
    </div>
</div>
@section ('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var startTimer;
        $('#email').on('keyup', function () {
            clearTimeout(startTimer);
            let email = $(this).val();
            startTimer = setTimeout(checkEmail, 500, email);
        });

        $('#email').on('keydown', function () {
            clearTimeout(startTimer);
        });

        function checkEmail(email) {
            $('#email-error').remove();
            if (email.length > 1) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('checkEmail') }}",
                    data: {
                        email: email,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data.success == false) {
                            $('#email').after('<div id="email-error" class="text-danger" <strong>'+data.message[0]+'<strong></div>');
                        } else {
                            $('#email').after('<div id="email-error" class="text-success" <strong>'+data.message+'<strong></div>');
                        }

                    }
                });
            } else {
                $('#email').after('<div id="email-error" class="text-danger" <strong>Email address can not be empty.<strong></div>');
            }
        }
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
    $(document).ready(function() {
        $("#password_confirmation").keyup(CheckPasswordMatch);
    });
</script>

<script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 6) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>


@endsection
