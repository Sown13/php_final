@extends('auth.auth-master')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/register.css') }}" />


<div>
    {{-- header sign up --}}
    <div class="header-wrapper-signup d-flex justify-content-center align-items-center">
        <div class="header-signup">
            <div class="d-flex align-self-center align-items-center">
                <a href="/" class="align-bottom" style="padding-right: 5px;">
                    <i class="fa-solid fa-bag-shopping fa-2xl" style="font-size: 45px;"></i>
                </a>
                <a href="/">
                    <h4>Shopmee</h4>
                </a>
                <h4 style="color: black; padding-left: 10px;">Sign Up</h4>
            </div>
        </div>
    </div>

    {{-- header sign up --}}
    <div class="signup-page">
        <div class="signup-form">
            <div class="signup-form-header">
                <h4>Sign Up</h4>
            </div>
            <div class="signup-form-body">
                <form method="post" action="{{ route('register.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input class="form-control form-control-lg" type="text" name="email" value="{{ old('email') }}" placeholder="Your Phone or Email"
                        aria-label=".form-control-lg example" style="font-size: 14px; margin-bottom: 28px;" required="required" />
                    @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                    <input class="form-control form-control-lg" type="password" name="password"
                        placeholder="Your Password" aria-label=".form-control-lg example"
                        style="font-size: 14px; margin-bottom: 28px;" required="required" />
                    @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                    <input class="form-control form-control-lg" type="password" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" required="required"
                        onchange="handleConfirmPasswordChange(this.value)" placeholder="Re-enter Password"
                        aria-label=".form-control-lg example" style="font-size: 14px; margin-bottom: 28px;" />
                    @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary signup-button" type="submit">SIGN UP</button>
                    </div>
                </form>

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
            <div class="signup-form-footer d-flex justify-content-center align-self-center">
                <span style="color: #a2a2a2;">Have an account? </span>
                <a href="/login"> Log In </a>
            </div>
        </div>
    </div>
    <Footer></Footer>
</div>

@endsection