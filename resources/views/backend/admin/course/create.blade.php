
@extends('layouts.include.admin.master')
@section('content')
    <div class="pd-20 card-box mb-30 mt-3">
        <div class="clearfix">



                @if(Session::has('error_message'))
                    <div class="alert alert-danger   fade show" role="alert">

                        {{Session::get('error_message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                @endif

            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-30 text-dark">Course  Details</h5>

                </div>
                <div class="col-md-2">
                    <a href="{{route('admincourse')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
            </div>
            <hr>


        </div>

        <div class="wizard-content py-3">
            <form action="{{route('adminstore.course')}}" method="POST">

                @include('sweetalert::alert')

                @csrf
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Course Name</label>
                                <input type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" placeholder="e.g SOS Use of English ">
                                @error('course_name')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Course Code</label>
                                <input type="text" class="form-control @error('course_code') is-invalid @enderror" name="course_code" placeholder="eg.SOS 101">
                                @error('course_code')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Date of  Exams</label>
                                <input type="date" class="form-control @error('exam_date') is-invalid @enderror" name="exam_date" placeholder="date">
                                @error('exam_date')
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
