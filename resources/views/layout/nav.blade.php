<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <header id="masthead" class="site-header header-default  light">
        <div class="container">
            <div class="amy-inner">
                <div class="amy-left">
                    <div id="amy-site-logo">
                        <a href="/">
                            <img src="{{ asset('images/movie.png') }}" alt="Movie Vibe" id="logo">
                        </a>
                    </div>
                </div>
                <div class="amy-right">
                    <nav id="amy-site-nav" class="amy-site-navigation amy-primary-navigation">
                        <div class="menu-mainnav-container">
                            <ul id="menu-mainnav" class="nav-menu">
                                <li id="menu-item-443"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-443">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li id="menu-item-443"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-443">
                                    <a href="{{url('/movie')}}">Movie</a>
                                </li>

                                @if(auth()->check())
                                @if(auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2)
                                <li id="menu-item-305"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-305">
                                    <a href="{{url('/premium')}}" id="topRated">Streaming</a>
                                </li>
                                @endif
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
                @if(auth()->check())
                <div>
                    <button class="btn" id="userProfile" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                        aria-controls="offcanvasScrolling">
                        <i class="fa-solid fa-user"><span
                                style="padding-left: 5px;font-size:15px;font-family:lato;">{{auth()->user()->name}}</span></i></button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <h3 class="text-center">Profile</h3>

                        <div class="offcanvas-header">
                            <img src="" alt="profile image" id="profileImageSmall">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div>
                            <h4 class="text-center">{{auth()->user()->name}}</h4>
                            <h5 class="text-center">{{auth()->user()->email}}</h5>
                        </div>
                        <div class="offcanvas-body" id="category">
                            <li><a href="{{url('userUpdateProfile')}}">Update Profile</a></li>
                            <li><a href="">History</a></li>
                            <li><a href="">Ticket</a></li>
                            <li><a href="{{url('notification')}}">Notification</a></li>
                            <li><b><a href="{{ url('logout') }}" style="font-size: 25px;">Logout</a></b></li>
                        </div>
                    </div>
                </div>
                @else
                <div id="registerButton" style="margin-left: 20px;">
                    <a href="{{ url('register') }}">Register<i class="fa-solid fa-user-plus"></i></a>
                </div>
                <div id="logInButton">
                    <a href="{{ url('login') }}">Login<i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                </div>
                @endif
            </div>
        </div>
    </header>
</body>

</html>