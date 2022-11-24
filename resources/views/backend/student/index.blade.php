@extends('layouts.include.student.master')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')

        <div class="pd-ltr-20 py-4">

                <div class="row">
                    <div class="col-xl-4 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">6</div>
                                    <div class="weight-600 font-14">My courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">7</div>
                                    <div class="weight-600 font-14">Scheduled Exams</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">6</div>
                                    <div class="weight-600 font-14">Canceled Exams</div>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>

        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">My Registered Courses </h4>
            </div>

            <div class="pb-20">
                <table class="table hover table-bordered multiple-select-row data-table-export nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">S/N</th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $faculty as $faculty )

                        <tr>
                            <td class="table-plus">{{ $faculty->id }}</td>
                            <td>{{ $faculty->name }}</td>
                            <td>{{ $faculty->created_at }}</td>
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
