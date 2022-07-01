@extends('layouts.app')

@section('content')
<div class="container forms">
    <div class="row">
        <div class="col-md-12 sign">
            <h3>Sign into your account</h3>
            <p>Welcome back!</p>
        </div>
        <div class="col-md-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="logininput">
                <div class="row mb-3">
                    <label for="email">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" style="width: 420px;height:40px;" placeholder="Enter your email address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" style="width: 420px;height:40px;" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" style="margin-left:10%" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label rememberLbl" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                        </div>
                    </div>
                    <div class="col-md-6 forgot">
                        @if (Route::has('password.request'))
                        <a class="forgot" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-1">
                        <button type="submit" class="btn btn-primary loginb">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-1 mt-1">
                        <p style="text-align:center">Dont have an account? <span><a href="{{ route('register') }}">Register here</a></span></p>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
