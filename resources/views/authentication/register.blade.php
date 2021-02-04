@extends('layout.authentication')
@section('title', 'Register')


@section('content')

<div class="auth_brand" style="margin-bottom: 0px">
    <a class="navbar-brand" href="#"><img <img src="{{ asset('assets/images/logo.png') }}" width="300" style="background: #062c62" class="d-inline-block align-top mr-2" alt=""></a>                                                
</div>
<div class="card">
    <div class="header">
        <p class="lead">Create an account</p>
    </div>
    <div class="body">
        <form class="form-auth-small" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group c_form_group">
                <label>Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('email') }}" required autocomplete="name" placeholder="Enter your name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group c_form_group">
                <label>Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group c_form_group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group c_form_group">
                <label>Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm your password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>
            <div class="bottom">
                <span>Already have an account? <a href="{{route('authentication.login')}}">Login</a></span>
            </div>
        </form>
    </div>
</div>

@stop
