{{-- @extends('layouts.app')

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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
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


@extends('layouts.user-master')

@section('content')
    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <div class="w-100">
            <!-- Sign Up Section -->
            <div class="bg-white">
                <div class="content content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                            <!-- Header -->
                            <div class="text-center">
                                <p class="mb-2">
                                    <img  src="{{ asset('assets/media/photos/biman_red_logo.png')}}" height="100" width="100" class="text-primary" alt="alt text">
                                    {{-- <i class="fa fa-2x fa-circle-notch text-primary"></i> --}}
                                </p>
                                <h1 class="h4  mb-1">
                                    Create Account
                                </h1>
                                <h2 class="h6 font-w400 text-muted mb-3">
                                    Get your access today in one easy step
                                </h2>
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <b>{!! \Session::get('success') !!}</b>
                                    
                                    </div>
                                @endif
                                @if (\Session::has('error'))
                                <div class="alert alert-danger">
                                        <b>{!! \Session::get('error') !!}</b>
                                    </div>
                                @endif
                            </div>
                            <!-- END Header -->

                            <!-- Sign Up Form -->
                            <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signup" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="py-3">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror"
                                            id="signup-username" name="name" placeholder="Username" value="{{ old('name')}}" required>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                            id="signup-email" name="email" placeholder="Email"  value="{{ old('email')}}" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">

                                        <input type="text" class="form-control form-control-lg form-control-alt" id=""
                                            name="phone" placeholder="Mobile No">
                                    </div>

                                    <div class="form-group">
                                        <label class="d-block" for="example-file-input">Enter your profile picture</label>
                                        <input type="file" id="example-file-input" name="user_photo">
                                    </div> --}}

                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                            id="signup-password" name="password" placeholder="Password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg form-control-alt"
                                            id="signup-password-confirm" name="password_confirmation"
                                            placeholder="Confirm Password" required>
                                    </div>

                                    {{-- <div class="form-group">
                                        
                                        <select class="form-control form-control-lg form-control-alt" id="group_id" name="group_id">
                                            <option value="0">Select Station</option>
                                            @foreach ($groups as $group)
                                                <option value={{$group->group_id}}>{{$group->group_name}}</option>
                                            @endforeach
                                            
                                            
                                        </select>
                                    </div> --}}

                                    <div class="form-group">
                                        {{-- <label for="example-select">Select</label> --}}
                                        <select class="form-control form-control-lg form-control-alt" id="role" name="role">
                                            <option value="0">Select Role</option>
                                            <option value="2">Super user</option>
                                            <option value="3">Basic User</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms"
                                                    name="signup-terms">
                                                <label class="custom-control-label font-w400" for="signup-terms">I agree to
                                                    Terms &amp; Conditions</label>
                                            </div>
                                            <div class="py-2">
                                                <a class="font-size-sm font-w500" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#one-signup-terms">View
                                                    Terms</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center mb-0">
                                    <div class="col-md-6 col-xl-5">
                                        <button type="submit" class="btn btn-block btn-success">
                                            <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sign Up Section -->

            <!-- Footer -->
            <div class="font-size-sm text-center text-muted py-3">
                <strong>Biman Bangladesh Airlines IT Division</strong> &copy; <span data-toggle="year-copy"></span>
            </div>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
