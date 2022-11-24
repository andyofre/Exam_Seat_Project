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
                            <h4>Total Courses Info</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Class</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" href="{{route('admincreate.course')}}">
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
                        <h4 class="text-blue h4">Courses </h4>
                    </div>

                    <div class="pb-20">
                        <table class="table hover table-bordered multiple-select-row data-table-export nowrap">
                            <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">S/N</th>
                                <th>Course Name</th>
                                <th>Course Code</th>
                                <th>Exam Date</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $course as $course )

                                <tr>
                                    <td class="table-plus">{{ $course->id }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>{{ $course->course_code }}</td>
                                    <td>{{ $course->exam_date }}</td>
                                    <td>{{ $course->created_at }}</td>
                                    <td>
                                        <div>
                                            <a href="" class="btn btn-primary"><span class="icon-copy ti-pencil-alt mr-1"></span></a>


                                            <a href="" class="btn btn-danger"><span class="icon-copy ti-trash fs-40 mx-2" ></span></a>


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
