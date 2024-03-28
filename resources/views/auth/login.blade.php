@extends('auth.auth-master')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />



<div style="min-width: 1200px;">

    {{-- -- header --}}
    <div class="header-wrapper-login d-flex justify-content-center align-items-center">
        <div class="header-login d-flex justify-content-between align-items-center">
            <div class="d-flex align-self-center align-items-center">
                <a href="/" class="" style="padding-right: 5px;">
                    <i class="fa-solid fa-bag-shopping fa-2xl" style="font-size: 45px;"></i>
                </a>
                <a href="/">
                    <h4>Shopmee</h4>
                </a>
                <h4 style="color: black; padding-left: 10px;">Login</h4>
            </div>
            <a style="font-size: 15px;">Need help?</a>
        </div>
    </div>
    {{-- // header --}}



    <div class="login-page">
        <div class="login-form">
            <div class="login-form-header">
                <h2>Log In</h2>
            </div>
            <div class="login-form-body">
                <form method="post" action="{{ route('login.perform') }}">
                    {{-- must have this csrf token for any form in laravel, this help prevent csrf attack ~ for exp some one redirect page to this laravel page to get information --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input name="email" value="{{ old('email') }}" placeholder="Email" required="required"
                        autofocus class="form-control form-control-lg" type="text" aria-label=".form-control-lg example"
                        style="font-size: 14px; margin-bottom: 28px;" />
                    @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                    <input class="form-control form-control-lg" type="password" placeholder="Your password"
                        aria-label=".form-control-lg example" style="font-size: 14px; margin-bottom: 28px;"
                        name="password" value="{{ old('password') }}" required="required" />
                    @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary login-button" type="submit">LOG IN</button>
                    </div>
                </form>
                <div class="d-flex justify-content-between">
                    <a class="me-auto p-2">Forgot password?</a>
                    <a class="p-2">Login with phone number</a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div style="width: 100%; height: 1px; background-color: #dbdbdb;"></div>
                    <div style="padding: 0px 4px 0px 4px; color: #dbdbdb;">OR</div>
                    <div style="width: 100%; height: 1px; background-color: #dbdbdb;"></div>
                </div>
                <div class="d-flex justify-content-center" aria-label="Social Media Buttons">
                    <button type="button" class="btn" style="width: 160px; box-sizing: border-box; border: 1px solid;">
                        <i class="fab fa-google"></i> Google
                    </button>
                    <button type="button" class="btn" style="width: 160px; box-sizing: border-box; border: 1px solid;">
                        <i class="fab fa-facebook"></i> Facebook
                    </button>
                </div>
            </div>
            <div class="login-form-footer d-flex justify-content-center align-self-center">
                <span style="color: #a2a2a2;">New to Shopmee? </span>
                <a href="/register"> Sign Up </a>
            </div>
        </div>
    </div>

   

</div>
@endsection