
@extends('layouts.include.admin.master')
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">

            @if(Session::has('success_message'))
                <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-30 text-dark">Supervisor Personal Info</h5>

                </div>
                <div class="col-md-2">
                    <a href="{{route('adminsupervisors')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
            </div>
            <hr>


        </div>

        <div class="wizard-content py-3">
            <form action="{{route('adminstore.supervisor')}}" method="POST">

                @include('sweetalert::alert')

                @csrf
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="eg. Jon Doe">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@gmail.com">
                                @error('email')
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
                                    <option selected='' disabled>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="e.g 09047473322">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Faculty</label>
                                <select class="form-select form-control @error('faculty') is-invalid @enderror" name="faculty">
                                    <option selected='' disabled>Select</option>
                                    <option value="Art">Art</option>
                                    <option value="Science">Science</option>
                                    <option value="Education">Education</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Basic Medical Science">Basic Medical Science</option>
                                </select>

                                @error('faculty')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror

                            </div>
                        </div>


                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-select form-control @error('department') is-invalid @enderror" name="department">
                                    <option selected='' disabled>Select department</option>
                                    <option value="Biology Education">Biology Education</option>
                                    <option value="Pharmacology">Pharmacology</option>
                                    <option value="Health Science Education">Health Science Education</option>
                                    <option value="Mathematics">Mathematics</option>

                                </select>

                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror

                            </div>
                        </div>


                    </div>


                    <div class="input-group mb-0 py-3">

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </section>


            </form>
        </div>

    </div>


@endsection
