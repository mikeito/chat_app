@extends('layouts.app')

@section('content')
<div class="account-pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center mb-4">
                            <a href="index.html" class="auth-logo mb-5 d-block">
                                <img src="assets/images/logo-dark.png" alt="" height="30" class="logo logo-dark">
                                <img src="assets/images/logo-light.png" alt="" height="30" class="logo logo-light">
                            </a>

                            <h4>Sign up</h4>
                            <p class="text-muted mb-4">Get your Chatvia account now.</p>
                            
                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-3">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
    
                                        <div class="form-group">
                                            <label>{{ __('Name') }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-user-2-line"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} bg-soft-light border-light" required autocomplete="name" autofocus placeholder="Enter Username">
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>{{ __('E-Mail Address') }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-mail-line"></i>
                                                    </span>
                                                </div>
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} bg-soft-light border-light" placeholder="Enter Email">
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label>{{ __('Password') }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-lock-2-line"></i>
                                                    </span>
                                                </div>
                                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} bg-soft-light border-light" placeholder="Enter Password">
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label>{{ __('Confirm Password') }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-lock-2-line"></i>
                                                    </span>
                                                </div>
                                                <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} bg-soft-light border-light" placeholder="Confirm Password">
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div id="profiles" class="form-group mb-4">
                                            <label>Profile picture</label>
                                            <div class="mb-3" style="position: relative;">
                                                <i class="mdi mdi-cloud-upload mdi-48px text-danger" style="position: absolute; transform: translatey(-35%);"></i>
                                                <input type="file" class="file" name="picture" style="opacity: 0;">
                                                <span class="fileName" style="margin-left: -210px;"> file name</span>
                                            </div>
                                        </div>


                                        <div>
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Sign up</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">By registering you agree to the Chatvia <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Already have an account ? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Signin </a> </p>
                            <p>© 2020 Chatvia. Crafted with <i class="mdi mdi-heart text-danger"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
