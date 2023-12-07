{{-- @extends('layouts.app')

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
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

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
@endsection
--}}



@extends('layouts.user-master')
@section('header-extension')
    {!! htmlScriptTagJsApi() !!}
@endsection
@section('content')

    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <div class="w-100">
            <!-- Sign In Section -->
            <div class="bg-white" >
                <div class="content content-full ">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                            <!-- Header -->
                            <div class="text-center">
                                <p class="mb-2">
                                    <img  src="{{ asset('assets/images/logo/50year-logo.png')}}" height="150" width="150" class="text-primary" alt="alt text">
                                    {{-- <i class="fa fa-2x fa-circle-notch text-primary"></i> --}}
                                    
                                </p>
                                <h1 class="font-w700 mb-2" style="color: #017233">
                                    Biman<span class="font-w300">Bangladesh</span>Airlines
                                </h1>
                                <h2 class="h6 font-w400  mb-3">
                                    <b>Welcome, Please sign in to continue.</b>
                                </h2>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="py-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg form-control-alt"
                                            id="{{-- login-username --}}"
                                            name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg form-control-alt"
                                            id="login-password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box messenger-box-input-wrap">
                                            <div class="form-group">
                                                <label class="label-text" for="g-recaptcha-response">Captcha<span class="text-danger"> *</span></label>
                                                {!! htmlFormSnippet() !!}

                                                @error('g-recaptcha-response')
                                                <span class="invalid-feedback" role="alert"></span>
                                                <strong class="text-danger">{{$message}}</strong>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="login-remember"
                                                    name="login-remember">
                                                <label class="custom-control-label font-w400" for="login-remember">Remember
                                                    Me</label>
                                            </div>
                                            <div class="py-2">
                                                <a class="font-size-sm font-w500" href="op_auth_reminder2.html">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center mb-0">
                                    <div class="col-md-12 col-xl-5">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                        </button>
                                    </div>
                                    {{-- <div class="col-md-6 col-xl-5">
                                        <a href="{{ route('register') }}" class="btn btn-block btn-alt-success">
                                            <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                        </a>
                                    </div> --}}
                                </div>
                            </form>
                            
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                    <p class="mb-2">
                        <img src="{{asset('assets/media/photos/footer.png')}}" 
                                        alt=""
                                        class="img-fluid">
                        {{-- <i class="fa fa-2x fa-circle-notch text-primary"></i> --}}
                    </p>
                </div>
            </div>
            <!-- END Sign In Section -->

            <!-- Footer -->
            <div class="font-size-sm text-center text-muted py-3">
                <strong>Biman Bangladesh Airlines IT Division</strong> &copy; <span data-toggle="year-copy"></span>
            </div>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
