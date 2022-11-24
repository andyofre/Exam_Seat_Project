

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <h5 class="text-muted font-weight-bold font-28" style="font-family: 'Bahnschrift">Exam Seat Number</h5>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    @if(Auth::user()->role == 3)
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle  no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Admin Dashboard</span>
                        </a>

                    </li>

                    @endif


                @if(Auth::user()->role == 2)
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle  no-arrow">
                                <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                            </a>

                        </li>

                @endif



                        <li class="dropdown">

                        <a href="" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-user"></span><span class="mtext"> Registration</span>
                        </a>

                    </li>

                    @if(Auth::user()->role == 3)
                    <li class="dropdown">
                        {{-- {{ route('paymentView') }} --}}
                        <a href="" class="dropdown-toggle no-arrow">
                            <span class="micon icon-copy ti-id-badge"></span class="mtext">Add Class</span>
                        </a>

                    </li>

                    @endif

                    @if(Auth::user()->role == 3)

                    <li class="dropdown">

                        <a href="" class="dropdown-toggle  no-arrow">
                            <span class="micon icon-copy ti-alarm-clock"></span><span class="mtext">Schedule Exams</span>
                        </a>

                    </li>
                    @endif


{{--                    <li class="dropdown">--}}

{{--                        <a href="" class="dropdown-toggle no-arrow">--}}
{{--                            <span class=" micon dw dw-apartment"></span><span class="mtext">Hostel</span>--}}
{{--                        </a>--}}

{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="" class="dropdown-toggle no-arrow">--}}
{{--                            <span class="micon icon-copy ti-harddrives"></span><span class="mtext">Room</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="" class="dropdown-toggle no-arrow">--}}
{{--                            <span class="micon icon-copy ti-medall"></span><span class="mtext"> Allocated </span>--}}
{{--                        </a>--}}

{{--                    </li>--}}



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
