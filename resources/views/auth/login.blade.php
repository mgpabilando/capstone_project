@extends('layouts.loginandregister')
{{------CUSTOM LOGIN------}}
@section('content')
    <section class="Login_Section">
        <div class="container log_content">
            <div class="row d-flex justify-content-center">           
                <div class="hms-display col-md-6 d-flex align-items-center justify-content-center">
                    <h3 class="title-hms">BRGY HEALTH MANAGEMENT SYSTEM</h3>
                    <div class="d-flex align-items-center justify-content-center" id="overlay">
                        <img class="logo" src="images/HMS1.png" alt=""> 
                    </div>   
                </div>
                
                <div class="hms-login col-md-6 d-flex align-items-center">
                    <div class="form-login p-2 d-flex justify-content-center">
                        <form method="POST" action="{{ route('customlogin') }}">   
                            @csrf
                            <div class="brgy-logo d-flex align-items-start justify-content-center">
                                <img class="login-user-logo" src="images/macawayan logo.png" alt="Login" width="150" height="150">
                            </div>
                            
                            <div class= "input-group">
                                <i class="fa fa-user icon"></i>
                                <input type="email" class= "form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}" autocomplete="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                            </div>

                            <div class= "input-group">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class= "form-control" name="password" placeholder="Enter Password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group">
                                    <input class="form-check-input" style="margin-right: 5px;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="margin-right:auto;">
                                      {{ __('Remember Me') }}
                                    </label>

                                    <label  class="form-check-label" for="reset">
                                        <a href="{{ route('forget.password.get') }}">Forgot password?</a>
                                    </label>
                            </div>

                            <button type="submit" class="btn">
                                LOGIN
                            </button>

                            <p>Not a Member? 
                                <a class="form-signup"
                                    style="cursor: pointer"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#registerModal">{{ __('Register here.') }}
                                </a>                            
                            </p>
                        </form>
                   
                    </div>                       <!-- Button trigger modal -->
                
            </div>  
        </div>
    </div>
    </section> 
    
    @include('auth.register')       
@endsection


