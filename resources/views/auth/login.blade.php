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

                            <h4>Sign in</h4>
                            <p class="text-muted mb-4">Sign in to continue to Chatvia.</p>
                            
                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-3">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
    
                                        <div class="form-group">
                                            <label>{{ __('E-Mail Address') }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-user-2-line"></i>
                                                    </span>
                                                </div>
                                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} bg-soft-light border-light" value="{{ old('email') }}" placeholder="Enter Username" required>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-muted font-size-13">Forgot password?</a>
                                            </div>
                                            <label>{{ __('Password') }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-lock-2-line"></i>
                                                    </span>
                                                </div>
                                                <input type="password" name="password"class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} bg-soft-light border-light" placeholder="Enter Password" required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="custom-control custom-checkbox mb-4">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember-check">{{ __('Remember Me') }}</label>
                                        </div>

                                        <div>
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Sign in</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="{{ route('register') }}" class="font-weight-medium text-primary"> Signup now </a> </p>
                            <p>© 2020 Chatvia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
