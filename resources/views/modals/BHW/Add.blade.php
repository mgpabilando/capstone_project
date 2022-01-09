<style>
    
/* The message box is shown when the user clicks on the password field */
#addbhwModal #message {
    display: none;
    color: #000;
    position: relative;

}

#addbhwModal #Passwordmessage p {
    font-size: 12px;
    margin-bottom: 5px;
    padding: 0px 0px;
}

/* Add a green text color and a checkmark when the requirements are right */
#addbhwModal .valid {
    color: green;
}

#addbhwModal .valid:before {
    position: relative;
    content: "✔";
    padding-right: 10px;
}

/* Add a red text color and an "x" when the requirements are wrong */
#addbhwModal .invalid {
    color: red;
}

#addbhwModal .invalid:before {
    position: relative;
    content: "✖";
    padding-right: 10px;
}

#addbhwModal #contact-error,
#email-error {
    color: red;
    font-weight: 500;
}

</style>

<!--******************************-------------- ADD BHW MODAL ------------*************************************-->
<div class="bhw-add modal fade" id="addbhwModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addbhwModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color: #2ae88a;
            color: #ffffff">
                <h5 class="modal-title" id="addbhwModal">{{ __('CREATE ACCOUNT') }}</h5> 
                </button>

            </div>
            <form class="bhw-modal" method="POST" action=" {{route('bhw.store')}}">
                @csrf
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="fname">First Name:</label>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                                <span class="invalid-feedback" role="alert" id="fnameError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="lname">Last Name:</label>
                                <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
                                <span class="invalid-feedback" role="alert" id="lnameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="address">Address:</label>
                                <input type="text" class="form-control" name="address">
                                <span class="invalid-feedback" role="alert" id="addressError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="bhwContact">Contact Number:</label>
                                <input type="tel" class="form-control" id="bhwContact" name="contact" pattern="[0-9]{11}" placeholder="09123456789" maxlength="11" required>
                                <span class="invalid-feedback" role="alert" id="bhwContactError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6">
                                <label class="control-label" for="bdate">Birthdate:
                                    <input type="date" class="form-control" name="bdate"></label>
                                <span class="invalid-feedback" role="alert" id="bdateError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
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
                            <label class="control-label" for="bhwEmail">Email Address:</label>
                            <input id="bhwEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row d-flex flex-wrap ">
                            <div class="col-md-6">
                                <label class="control-label" for="bhwPassword">Password:</label>
                                <input type="password" class="form-control" id="bhwPassword" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                <span class="invalid-feedback" role="alert" id="bhwPasswordError">
                                    <strong></strong>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="bhwPassword_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" id="bhwPassword_confirmation" name="password_confirmation">
                                <span class="invalid-feedback" role="alert" id="bhwPassword_confirmationError">
                                    <strong></strong>
                                </span>
                            </div>

                            <div id="Passwordmessage">
                                <p style="font-weight: 500">Password must contain the following:</p>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>6 characters</b></p>
                            </div>

                            <div class="registrationFormAlert d-flex justify-content-center" id="bhwCheckPasswordMatch"></div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer d-flex">
                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--*************************-------------------- ADD MODAL ENDS HERE -------------------********************---------------->
 
@section('scripts')
<script>
    $('#addbhwModal').on('hidden.bs.modal', function () {
    $('#addbhwModal form')[0].reset();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var startTimer;
        $('#bhwEmail').on('keyup', function () {
            clearTimeout(startTimer);
            let email = $(this).val();
            startTimer = setTimeout(checkEmail, 500, email);
        });

        $('#bhwEmail').on('keydown', function () {
            clearTimeout(startTimer);
        });

        function checkEmail(email) {
            $('#bhwEmail-error').remove();
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
                            $('#bhwEmail').after('<div id="bhwEmail-error" class="text-danger" <strong>'+data.message[0]+'<strong></div>');
                        } else {
                            $('#bhwEmail').after('<div id="bhwEmail-error" class="text-success" <strong>'+data.message+'<strong></div>');
                        }

                    }
                });
            } else {
                $('#bhwEmail').after('<div id="bhwEmail-error" class="text-danger" <strong>Email address can not be empty.<strong></div>');
            }
        }
    });
</script>

<script>
    var myInput = document.getElementById("bhwPassword");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("Passwordmessage").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the Passwordmessage box
    myInput.onblur = function() {
        document.getElementById("Passwordmessage").style.display = "none";
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

<script>
    function CheckPasswordMatch() {
        var password = $("#bhwPassword").val();
        var confirmPassword = $("#bhwPassword_confirmation").val();
        if (password != confirmPassword)
            $("#bhwCheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
        else
            $("#bhwCheckPasswordMatch").html("Passwords match.").css('color', 'green');
    }
    $(document).ready(function() {
        $("#bhwPassword_confirmation").keyup(CheckPasswordMatch);
    });
</script>
@endsection