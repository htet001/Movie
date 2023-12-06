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
                        <!-- <a href="index.html"> -->
                        <img src="{{ asset('images/logo1.png') }}" alt="Junction City" id="logo">
                        <!-- </a> -->
                    </div>
                </div>
                <div class="amy-right">
                    <nav id="amy-site-nav" class="amy-site-navigation amy-primary-navigation">
                        <div class="menu-mainnav-container">
                            <ul id="menu-mainnav" class="nav-menu">
                                <li id="menu-item-443" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-443">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li id="menu-item-443" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-443">
                                    <a href="{{url('/movie')}}">Movie</a>
                                </li>
                                <li id="menu-item-446" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-446">
                                    <a href="#">Theater</a>
                                </li>
                                <li id="menu-item-305" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-305">
                                    <a href="top-rated/index.html" id="topRated">Top rated</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                @auth
                <div id="logoutButton">
                    <a href="{{url('logout')}}">Logout<i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </div>
                @else
                <div id="registerButton">
                    <a href="{{url('register')}}">Register<i class="fa-solid fa-user-plus"></i></a>
                </div>
                <div id="logInButton">
                    <a href="{{url('login')}}">Login<i class="fa-solid fa-arrow-right-to-bracket"></i></i></a>
                </div>
                <div>
                    @endauth
                </div>
            </div>
        </div>
    </header>
</body>

</html>