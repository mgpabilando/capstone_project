
{{-- INITIAL REGISTER LAYOUT
     @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

 @extends('layouts.loginandregister')
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