@extends('layouts.include.admin.master')

@section('content')

        <div class="pd-ltr-20 py-4">

                <div class="row">
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{number_format($student)}}</div>
                                    <div class="weight-600 font-14">Students</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{number_format($supervisor)}}</div>
                                    <div class="weight-600 font-14">Supervisors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{number_format($courses)}}</div>
                                    <div class="weight-600 font-14">Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{number_format($hall)}}</div>
                                    <div class="weight-600 font-14">Hall</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{number_format($exam)}}</div>
                                    <div class="weight-600 font-14">Scheduled Examination</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">0</div>
                                    <div class="weight-600 font-14">Canceled Exams</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{ number_format($faculty) }}</div>
                                    <div class="weight-600 font-14">Faculty</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p px-2 text-center py-5 widget-style1">
                            <div class="d-flex flex-wrap align-items-center pt-4">
                                <div class="col-12">
                                    <div class="h4 mb-0 text-primary">{{ number_format($department) }}</div>
                                    <div class="weight-600 font-14">Department</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

@endsection
