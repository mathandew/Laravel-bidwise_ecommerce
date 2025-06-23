<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<!-- Mirrored from themesflat.co/html/bidzend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Aug 2024 08:34:29 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Bidwise</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ url('frontend/assets/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('frontend/assets/icon/Favicon.png') }}">

</head>

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if(Auth::user() && !Auth::user()->email_verified_at)
                <div class="alert alert-warning">
                    Your email is not verified. Please verify your email to gain full access.
                    <a href="{{ route('verification.resend') }}" class="btn btn-sm btn-primary">Resend Verification
                        Email</a>
                </div>
            @endif
            <header id="header_main" class="header_1 js-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                            <div id="site-header-inner" class="flex">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="{{url('/')}}" rel="home" class="main-logo">
                                            <h2>BIDWISE</h2>

                                        </a>
                                    </div>
                                </div>
                                <form class="form-search">
                                    <input type="text" placeholder="Search here">
                                    <button><i class="far fa-search"></i></button>
                                </form>

                                <div id="site-menu">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            {{-- <li class="menu-item menu-item-has-children  current-item">
                                                <ul class="sub-menu">
                                                    <li class="menu-item current-item"><a href="index.html">Home 1</a>
                                                    </li>
                                                    <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                                    <li class="menu-item"><a href="home-animation.html">Home
                                                            Animation</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="explore-1.html">Explore 1</a></li>
                                                    <li class="menu-item"><a href="explore-2.html">Explore 2</a></li>
                                                    <li class="menu-item"><a href="creator.html">Creator</a></li>
                                                    <li class="menu-item"><a href="item.html">Item </a></li>
                                                    <li class="menu-item"><a href="item-details.html">Item Details</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item menu-item-has-children ">
                                                <a href="#">Community</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item "><a href="blog.html">Blog</a></li>
                                                    <li class="menu-item"><a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="author.html">Authors</a></li>
                                                    <li class="menu-item"><a href="connect-wallet.html">Wallet
                                                            Connect</a></li>
                                                    <li class="menu-item"><a href="create-item.html">Create Item</a>
                                                    </li>
                                                    <li class="menu-item"><a href="login.html">Login</a></li>
                                                    <li class="menu-item"><a href="register.html">Register</a></li>
                                                </ul>
                                            </li> --}}
                                            @if(Auth::check() && Auth::user()->login_type == '1')
                                                <li class="menu-item ">
                                                    <a href="" class="disabled-link">Home</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a href="" class="disabled-link">Products</a>
                                                </li>
                                            @else
                                                <li class="menu-item ">
                                                    <a href="{{url('/')}}">Home</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a href="{{url('product')}}">Products</a>
                                                </li>
                                            @endif
                                            </li>
                                            <li class="menu-item ">
                                                <a href="{{url('category')}}">Category</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="{{url('contact')}}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>

                                <!-- 
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div> -->
                                <div class="button-connect-wallet">
                                    @if (Auth::check())

                                                                        <div class="user-info" style="display: flex; align-items: center;">
                                                                            <img class="user-photo"
                                                                                src="{{ url('frontend/assets/images/avatar/avt-1.jpg') }}"
                                                                                alt="{{ Auth::user()->name }}"
                                                                                style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px;" />
                                                                            <div>
                                                                                <!-- <ul class="navbar-nav mr-auto">
                                                                                                <li class="nav-item dropdown"> -->
                                                                                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->

                                                                                <span
                                                                                    style="font-weight: bold; font-size: 16px; color: #ffff;">{{ Auth::user()->name }}</span>
                                                                                <br>
                                                                                <span
                                                                                    style="font-size: 14px; color: #ffff;">{{ Auth::user()->email }}</span>
                                                                                <!-- </a> -->
                                                                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                                                </div>
                                                                                            </li>
                                                                                            </ul> -->
                                                                            </div>

                                                                            <a href="{{ url('logout') }}" class="sc-button logout style-2"
                                                                                style="margin-left: 15px;">
                                                                                <i class="fas fa-sign-in-alt"></i>
                                                                                {{-- <span>Logout</span> --}}
                                                                            </a>
                                                                            @php
                                                                                $isTwoFactorEnabled = auth()->user() && auth()->user()->google2fa_secret && auth()->user()->is_two_factor_enabled == 1;
                                                                            @endphp

                                                                            @if($isTwoFactorEnabled)
                                                                                <a href="#" class="btn btn-success" disabled>2FA Enabled</a>
                                                                            @else
                                                                            <a href="{{ route('2fa.enable') }}" class="btn btn-primary">Enable Two-Factor
                                                                            Authentication</a>
                                                                            @endif
                                                                            

                                                                            @if(Auth::check() && Auth::user()->login_type == 0 && Auth::user()->buyer_status == '1')
                                                                                <a href="{{url('become-seller')}}" class="sc-button logout  style-2"
                                                                                    style="margin-left: 15px;">
                                                                                    {{-- <i class="far fa-plus"></i> --}}
                                                                                    {{-- <img src="assets/images/icon/connect-wallet.svg" alt="icon"> --}}
                                                                                    <span>Become A Seller</span>
                                                                                </a>
                                                                            @elseif(Auth::check() && Auth::user()->login_type == 1 && Auth::user()->seller_status == '1')
                                                                                <a href="{{url('become-buyer')}}" class="sc-button logout  style-2"
                                                                                    style="margin-left: 15px;">
                                                                                    {{-- <i class="far fa-plus"></i> --}}
                                                                                    {{-- <img src="assets/images/icon/connect-wallet.svg" alt="icon"> --}}
                                                                                    <span>Become A Buyer</span>
                                                                                </a>
                                                                            @endif

                                                                        </div>

                                    @else
                                        <a href="{{ url('login') }}" class="sc-button logout style-2">
                                            <i class="fas fa-door-open"></i><!-- Login icon -->
                                            <span>Login</span>
                                        </a>
                                    @endif
                                </div>



                                {{-- <div class="mode_switcher">
                                    <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                    <a href="#" class="light d-flex align-items-center">
                                        <img src="assets/images/icon/sun.png" alt="">
                                    </a>
                                    <a href="#" class="dark d-flex align-items-center is_active">
                                        <img id="moon_dark" src="assets/images/icon/moon.png" alt="">
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </header>