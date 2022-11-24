
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
                    <h5 class="mb-30 text-dark">Department </h5>

                </div>
                <div class="col-md-2">
                    <a href="{{route('admindepartment')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>

                </div>
            </div>
            <hr>


        </div>

        <div class="wizard-content py-3">
            <form action="{{route('adminstore.department')}}" method="POST">

                @include('sweetalert::alert')

                @csrf
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Faculty name</label>
                                    <select name="faculty_id" class="form-control form-select @error('faculty_id') is-invalid @enderror">
                                        <option value="" selected="" disabled="">Select Faculty</option>
                                        @foreach ($faculty as $faculty)
                                        <option value="{{ $faculty->id }}">{{$faculty->name }}</option>

                                        @endforeach
                                    </select>
                                @error('faculty_id')
                                <span class="invalid-feedback" role="alert">
                                <span>{{ $message }}</span>
                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Department Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="e.g Medical Biochemistry" style="text-transform: uppercase">
                                @error('name')
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
