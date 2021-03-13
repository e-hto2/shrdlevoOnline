<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="login">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/new-logo.png') }}" type="image/x-icon"/>

    <!-- Title -->
    <title>Web game</title>

    <!---Fontawesome css-->
    <link href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!---Ionicons css-->
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!---Typicons css-->
    <link href="{{ asset('assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">

    <!---Feather css-->
    <link href="{{ asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">

    <!---Falg-icons css-->
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!---Style css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-dark-style.css') }}" rel="stylesheet">
    <style>
        .insights-button{
            width: 100%!important;
            background-color: #FF3366!important;
            font-weight: bold!important;
            border:2px solid white;
        }
        .insights-button:hover{
            border:2px solid purple!important;
        }
    </style>
</head>

<body class="main-body dark-theme">

<!-- Loader -->
<div id="global-loader">
    <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page main-signin-wrapper">

    <!-- Row -->
    <div class="row text-center pl-0 pr-0 ml-0 mr-0">
        <div class="col-lg-3 d-block mx-auto">
            <div class="text-center mb-2">
                <img src="{{ asset('assets/img/brand/new-logo.png') }}" class="header-brand-img" alt="logo">
                <img src="{{ asset('assets/img/brand/new-logo.png') }}" class="header-brand-img theme-logos" alt="logo">
            </div>
            <div class="card custom-card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group text-left">
                            <label>Email</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>Invalid username or password</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group text-left">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>Invalid username or password</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="btn ripple btn-main-primary btn-block insights-button">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

</div>
<!-- End Page -->

<!-- Jquery js-->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Ionicons js-->
<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

<!-- Perfect-scrollbar js-->
<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<!-- Rating js-->
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- Custom js-->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>


















{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                    {{--<label class="form-check-label" for="remember">--}}
                                        {{--{{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--@if (Route::has('password.request'))--}}
                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
