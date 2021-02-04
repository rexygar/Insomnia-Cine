@extends('layout.authentication')
@section('title', 'Login')


@section('content')

    <div class="auth_brand" style="margin-bottom: 0px">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}" width="300" style="background: #062c62" class="d-inline-block align-top mr-2" alt=""></a>                                                
    </div>
    <div class="card">
        <div class="header">
            <p class="lead">Login to your account</p>
        </div>
        <div class="body">
            <form class="form-auth-small" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group c_form_group">
                    <label>Email</label>
                    <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group c_form_group">
                    <label>Password</label>
                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember me</span>
                    </label>								
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block" href="{{route('dashboard.index')}}">LOGIN</button>
                <div class="bottom">
                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{route('authentication.forgotpassword')}}">Forgot password?</a></span>
                    <span>Don't have an account? <a href="{{route('authentication.register')}}">Register</a></span>
                </div>
            </form>
        </div>
    </div>

@stop
