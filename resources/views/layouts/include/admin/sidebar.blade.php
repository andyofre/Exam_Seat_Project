

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="#">
                <h5 class="text-muted font-weight-bold font-28" style="font-family: 'Bahnschrift">Exam Seat Number</h5>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">

                    <li class="dropdown">
                        <a href="{{route('adminhome')}}" class="dropdown-toggle  no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                        </a>





                    <li class="dropdown">

                        <a href="{{route('adminstudents')}}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-id-badge"></span><span class="mtext"> Students</span>
                        </a>

                    </li>

                    <li class="dropdown">

                        <a href="{{route('adminsupervisors')}}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-user"></span><span class="mtext"> Supervisors</span>
                        </a>

                    </li>



                    <li class="dropdown">

                        <a href="{{route('adminhall')}}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-briefcase"></span><span class="mtext"> Add Hall</span>
                        </a>

                    </li>


                    <li class="dropdown">

                        <a href="{{route('admincourse')}}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-book"></span><span class="mtext"> Add Course</span>
                        </a>

                    </li>



                    <li class="dropdown">

                        <a href="{{route('admincourse')}}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-user"></span><span class="mtext">Course Supervisor</span>
                        </a>

                    </li>




                    <li class="dropdown">

                        <a href="{{ route('adminschedule') }}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-alarm-clock"></span><span class="mtext">Schedule Exams</span>
                        </a>

                    </li>



                    <li class="dropdown">

                        <a href="{{ route('adminfaculty') }}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-archive"></span><span class="mtext">Faculty</span>
                        </a>

                    </li>


                    <li class="dropdown">

                        <a href="{{ route('admindepartment') }}" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-archive"></span><span class="mtext">Department</span>
                        </a>

                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Settings</div>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit-2"></span><span class="mtext">Profile</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="introduction.html">Change Password</a></li>
                            <li><a href="getting-started.html">Update photo</a></li>
                        </ul>
                    </li>
                    <li>
{{--                        <a href="" target="_blank" class="dropdown-toggle no-arrow">--}}
{{--                            <span class="micon dw dw-logout "></span>--}}
{{--                            <span class="mtext">Logout </span>--}}
{{--                        </a>--}}

                        <a class="dropdown-toggle no-arrow" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <span class="micon dw dw-logout "></span>
                            <span class="mtext">Logout </span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </div>
