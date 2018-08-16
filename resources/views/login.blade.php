@extends('layouts.emailRegstration')
@section('content')
<div class="login-wrap">
    <div class="login-content">
        @if(session()->has('message'))
        <div class="alert alert-warning">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="login-logo" style="border-radius: 50%;">
            <a href="{{route('welcome')}}"><img src="img/seclogo.png" alt="logo" title="" height="50px" width="50px" style="border-radius: 50%;" /></a>
        </div>
        <div class="login-form">
            <form action="{{route('customerLogin')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="au-input au-input--full form-control" type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="au-input au-input--full form-control" type="password" name="password" id="pas" placeholder="Password">
                </div>
                <div class="login-checkbox">
                    <label>
                    <input type="checkbox" name="remember">Remember Me
                    </label>
                    <label>
                    <a class="btn btn-link" href="{{ route('user.password.request') }}">
                    {{ __('Forgot Password?') }}
                    </a>
                    </label>
                </div>
                <button type="submit" id="sub" class="au-btn au-btn--block au-btn--green m-b-20" name="submit">Login</button>
            </form>
            <div class="register-link">
                <p>
                    Don't you have account?
                    <a href="{{route('signupSelection')}}" id="loginbtn">Register Here</a>/
                    <a href="{{ route('welcome') }}">Home</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection