@extends('layouts.app')

@section('content')
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input">
                <input id="email" placeholder="Username" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <input id="password" placeholder="Password" type="password" class="validate form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="remember-me">
                <input type="checkbox">
                    <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" value="Login">


                <div class="forgot-password">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                </div>

        </form>

        <div class="register">
            Don't have an account yet?
            <a href="#"><button id="register-link">Register here</button></a>
        </div>
    </div>
@endsection
