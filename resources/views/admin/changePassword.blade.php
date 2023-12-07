@extends('admin.main')

@section('content')
    

    <!-- Page Content -->
    <div class="content">
        <div class="container text-center">
            {{-- Message --}}
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading h4 my-2">Success!</h3>
                    <p class="mb-0">{{ Session::get('success') }}</p>
                </div>
            @endif
            @if (\Session::has('errors'))
                <div class="alert alert-warning alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading h4 my-2">Sorry!</h3>
                    <p class="mb-0">{{ Session::get('errors') }}</p>
                </div>
            @endif
        </div>

        <!-- Basic -->
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Change Password</h3>
                
            </div>
            <div class="block-content block-content-full">
                <h5 style="color: rebeccapurple">Guidelines for Strong Passwords:</h5>
               
                <ul class="fa-ul list list-simple-mini push" style="color: rebeccapurple">
                    {{-- <li>
                        <i class="fa fa-check fa-li text-success"></i>
                        <b>Meeting Type:</b> {{$meeting->meeting_type}}
                    </li> --}}
                    <li>
                        <i class="fa fa-check fa-li text-success"></i>
                        <b>At least 8 characters—the more characters, the better.</b> 
                    </li>
                    <li>
                        <i class="fa fa-check fa-li text-success"></i>
                        <b>A mixture of both uppercase and lowercase letters.</b> 
                    </li> 
                    <li>
                        <i class="fa fa-check fa-li text-success"></i>
                        <b>A mixture of letters and numbers.</b> 
                    </li>
                    <li>
                        <i class="fa fa-check fa-li text-success"></i>
                        <b>Inclusion of at least one special character, e.g., ! @ # ? ].</b> 
                    </li>
                    <li>
                        <i class="fa fa-check fa-li text-success"></i>
                        <b>Example: qwerty#09876</b>
                    </li>
                </ul>
                {{-- <h5 style="color: rebeccapurple">Password must contain minimum 8 letters including a special character and number. <br> Example: qwerty#09876</h5> --}}
                <form action="{{ route('changePasswordSubmit') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                {{-- Change Your Password --}}
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            
                            <div class="form-group">
                                <label for="example-text-input">New Password</label>
                                <input type="password"  class="form-control" id="example-text-input" name="new_password"
                                minlength="8" placeholder="Minimum 8 characters" title="8 characters minimum, special characer, number" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input">Confirm Password</label>
                                <input type="password" class="form-control" id="example-text-input" name="confirm_password"
                                minlength="8" placeholder="Same as new password" required>
                            </div>



                            <button type="submit" class="btn btn-primary mr-1 mb-3">
                                <i class="fa fa-fw fa-upload mr-1"></i> Update
                            </button>
                            {{-- <button type="button" class="btn btn-alt-primary mb-3" onclick="One.loader('show');
                                setTimeout(function () {
                                    One.loader('hide');
                                }, 3000);">Preview Page Loader</button> --}}

                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- END Basic -->
    </div>
    <!-- END Page Content -->
@endsection


