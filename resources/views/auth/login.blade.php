{{---INITIAL LOGIN LAYOUT-
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}

@extends('layouts.loginandregister')
{{------CUSTOM LOGIN------}}
@section('content')    
    <section class="Login_Section">
        <div class="container log_content">
            <div class="row">           
                <div class="hms-display col-md-6 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" id="overlay">
                        <img src="images/HMS1.png" alt="">
                        {{-- <h3 style="text-align:center">Barangay Macawayan Health Management System</h3>   --}}
                    </div>   
                </div>
                
                <div class="hms-login col-md-6 d-flex align-items-center">
                    <div class="form-login p-2 d-flex justify-content-center">
                        <form method="POST" action="{{ route('customlogin') }}">   
                            @if (Session::get('fail'))  
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{Session::get('fail')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif  

                            @csrf
                            <div class="brgy-logo d-flex align-items-start justify-content-center">
                                <img class="login-user-logo" src="images/macawayan logo.png" alt="Login" width="150" height="150">
                            </div>
                            
                            <div class= "input-group">
                                <i class="fa fa-user icon"></i>
                                <input type="email" class= "form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" autocomplete="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                            </div>

                            <div class= "input-group">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class= "form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="password">
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
                                        <a href="{{ route('forget.password.get') }}">Reset Password</a>
                                    </label>
                            </div>

                            <button type="submit" class="btn">
                                LOGIN
                            </button>

                            <p>Not a Member? 
                                <a class="form-signup"
                                    style="cursor: pointer"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#registerModal">{{ __('Register') }}
                                </a>                            
                            </p>
                        </form>
                   
                    </div>  
                                        <!-- Button trigger modal -->
                                   
                </div>
            </div>  
    </section> 
    @include('auth.register')    
@endsection


