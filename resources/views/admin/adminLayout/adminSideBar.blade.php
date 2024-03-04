<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="/">
            <img src="{{ asset('images/movie.png') }}" alt="Movie Vibe" style="width: 200px;height: 60px">
        </a>
    </div>
    <!--end logo-->

    <!-- Start Side Bar -->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{url('/dashboard')}}">
                    <i data-feather="home" class="align-self-center menu-icon"></i>
                    <span>Dashboard</span>
                    <span></span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);"><i data-feather="video"
                        class="align-self-center menu-icon"></i><span>Movies</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="javascript: void(0);"><i data-feather="box"
                                class="align-self-center menu-icon"></i><span>Categories</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{route('category.create')}}"><i
                                        class="ti-control-record"></i>Create</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('categorylist')}}"><i
                                        class="ti-control-record"></i>Category List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('movie/create')}}"><i
                                class="ti-control-record"></i>Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/movielist')}}"><i
                                class="ti-control-record"></i>Movie List</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/timetablelist')}}">
                    <i data-feather="clock" class="align-self-center menu-icon"></i>
                    <span>Movie Timetablelist</span>
                    <span></span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="box"
                        class="align-self-center menu-icon"></i><span>Cinema</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('theater/create')}}"><i
                                class="ti-control-record"></i>Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('theaterlist')}}"><i
                                class="ti-control-record"></i>Cinema List</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="lock"
                        class="align-self-center menu-icon"></i><span>Room</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('cinema/create')}}"><i
                                class="ti-control-record"></i>Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('cinemalist')}}"><i
                                class="ti-control-record"></i>Room List</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/mail')}}"><i data-feather="inbox"
                        class="align-self-center menu-icon"></i><span>Mail</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="box"
                        class="align-self-center menu-icon"></i><span>Premium Movie</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('premiumMovie/create')}}"><i
                                class="ti-control-record"></i>Premium Movie Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('premiumMovieList')}}"><i
                                class="ti-control-record"></i>Premium Movie List</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- End Side Bar -->
</div>
<!-- end left-sidenav-->