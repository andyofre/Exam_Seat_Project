

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


    <!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Examination Seat | Number</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendors/images/custom/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendors/images/custom/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendors/images/custom/favicon.png') }}">
{{-- <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png"> --}}

<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body class="login-page">
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{url('/')}}">
                <h2 class="text-muted" style="font-family: 'Bahnschrift">Exam Seat Number</h2>
            </a>
        </div>
        <div class="login-menu">
            <ul class="">
                <li><a class="btn btn-outline-dark" href="{{ route('registration') }}">Register</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap  align-items-center justify-content-center">


    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="alert alert-danger">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div> --}}




            <div class="col-md-9 col-lg-12">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h4 class="text-center text-dark" style="font-size:20px">Login to proceed to dashboard</h4>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        @include('inc.frontMessage')
                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                            @enderror
                            <div class="input-group-append custom">
									<span class="input-group-text">
                                        <span class="icon-copy ti-user"></span>
                                    </span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="********" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                            @enderror
                            <div class="input-group-append custom">
									<span class="input-group-text">
                                        <span class="icon-copy ti-lock"></span>
                                    </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0 py-3">

                                    <button class="btn btn-primary btn-lg btn-block">Login</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendors/scripts/core.js') }}"></script>
<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/process.js') }}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>
</body>
</html>

