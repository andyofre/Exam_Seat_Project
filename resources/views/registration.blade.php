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

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body class="">

<style type="text/css">
    .main-container{
        margin-right:170px;
        margin-bottom:120px;
    }

    @media only screen and (max-width: 600px) {
        .main-container{
            margin-right:0px;
            margin-bottom:0px;
        }
    }
</style>
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{url('/')}}">
{{--                <img src="{{ asset('vendors/images/custom/logo.png') }}" alt="">--}}
                <h2 class="text-muted" style="font-family: 'Bahnschrift">Exam Seat Number</h2>
            </a>
        </div>
        <div class="login-menu">
            <ul class="">
                <li><a class="btn btn-outline-dark" href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="main-container">
    {{-- <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px"> --}}


    <div class="pd-20 card-box mb-30">
        <div class="clearfix">

            @if(Session::has('success_message'))
                <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>

                    <div class="justify-content-center mt-4 mx-5">
                        <a href="{{route('login')}}" class="btn btn-success btn-sm">Proceed to dashboard</a>
                    </div>
                </div>


            @endif

            <h5 class="mb-30 text-dark">Student Verfication Profile</h5>
            <hr>
        </div>
        <div class="wizard-content py-3">
            <form action="{{ route('register.store') }}" method="POST">
                {{-- <h5>Personal Info</h5> --}}
                @csrf
                @include('sweetalert::alert')


                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Full name</label>
                                <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" >
                                @error('fullName')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Matric No.</label>
                                <input type="text" class="form-control  @error('matricNumber') is-invalid @enderror" name="matricNumber" >
                                @error('matricNumber')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Faculty</label>
                                <input type="text" class="form-control @error('faculty') is-invalid @enderror" name="faculty" >
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control @error('department') is-invalid @enderror" name="department">
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>



                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level</label>
                                <input type="text" class="form-control @error('level') is-invalid @enderror" name="level">
                                @error('level')
                                <span class="invalid-feedback" role="alert">
                                                    <span>{{ $message }}</span>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-select form-control @error('gender') is-invalid @enderror" name="gender">
                                    <option selected='' disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber">
                                @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@gm.com" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="********" name="password">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                                    <span>{{ $message }}</span>
                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Confirm Password</label>
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="*********" name="confirm_password">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>


                    </div>


                    <div class="input-group mb-0 py-3">

                        <button class="btn btn-lg btn-warning">Submit</button>

                    </div>
                </section>


            </form>
        </div>
    </div>



    {{-- </div>

</div> --}}
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

