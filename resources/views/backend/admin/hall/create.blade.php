
@extends('layouts.include.admin.master')
@section('content')
    <div class="pd-20 card-box mb-30 mt-3">
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
            <form action="{{route('adminstore.hall')}}" method="POST">

                @include('sweetalert::alert')

                @csrf
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Hall Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="e.g One thousand seater ">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Hall Capacity</label>
                                <input type="text" class="form-control @error('hall_capacity') is-invalid @enderror" name="hall_capacity" placeholder="eg. 300">
                                @error('hall_capacity')
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
