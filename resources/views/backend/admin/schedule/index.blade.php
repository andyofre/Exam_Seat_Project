@extends('layouts.include.admin.master')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    @include('sweetalert::alert')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>All Faculties</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">faculty</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{route('admincreate.schedule')}}">
                                Add New
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->

            <!-- Checkbox select Datatable End -->
            <!-- Export Datatable start -->
            @if(Session::has('success_message'))
                <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
            @endif




                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Faculty </h4>
                    </div>

                    <div class="pb-20">
                        <table class="table hover table-bordered multiple-select-row data-table-export nowrap">
                            <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">S/N</th>
                                <th>Name</th>
                                <th>Course Code</th>
                                <th>Exam Date / Start Time</th>
                                <th>Exam End Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $exam as $exams )

                                <tr>
                                    <td class="table-plus">{{ $exams->id }}</td>
                                    <td>{{ $exams->course->course_name }}</td>
                                    <td>{{ $exams->course->course_code }}</td>
                                    <td>{{ \Carbon\Carbon::parse($exams->start_time)->format('l jS  F Y  : h:i: A')}}</td>
                                    <td>{{ \Carbon\Carbon::parse($exams->end_time)->format('l jS  F Y  : h:i: A')}}</td>

                                    <td>
                                        <div>
                                                <a href="" class="btn btn-dark">Cancel Exam<span class="icon-copy ti-alarm-clock fs-40 mx-2" ></span></a>
                                                <a href="" class="btn btn-success">Edit <span class="icon-copy ti-pencil-alt mr-1"></span></a>


                                            <a href="" class="btn btn-danger">Delete<span class="icon-copy ti-trash fs-40 mx-2" ></span></a>


                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Export Datatable End -->
        </div>



    </div>





@endsection

@section('scripts')
    <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
@endsection
