<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">


<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aya's Restaurant</title>
    <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories">
    <meta name="author" content="spacingtech_webify">

    <link rel="shortcut icon" type="image/favicon" href="https://spacingtech.com/html/vegist-final/vegist/image/fevicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
    <style>
        input[type="search"] {
            -webkit-appearance: none !important;
            background-clip: padding-box;
            background-color: white;
            vertical-align: middle;
            border-radius: 0.25rem;
            border: 1px solid #e0e0e5;
            font-size: 1rem;
            width: 100%;
            line-height: 2;
            padding: 0.375rem 1.25rem;
            -webkit-transition: border-color 0.2s;
            -moz-transition: border-color 0.2s;
            transition: border-color 0.2s;
        }

        input[type="search"]:focus {
            transition: all 0.5s;
            box-shadow: 0 0 40px #f9d442b9;
            border-color: #f9d342;
            outline: none;
        }

        form.search-form {
            display: flex;
            justify-content: center;
        }

        label {
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: auto;
            align-self: center;
            margin-bottom: 0;
        }

        input.search-field {
            margin-bottom: 0;
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: auto;
            align-self: center;
            height: 51px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        button.search-submit {
            height: 51px;
            margin: 0;
            padding: 1rem 1.3rem;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            font-family: "Font Awesome 5 Free";
            font-size: 1rem;
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        .button {
            display: inline-block;
            font-weight: 600;
            font-size: 0.8rem;
            line-height: 1.15;
            letter-spacing: 0.1rem;
            text-transform: uppercase;
            background: #f9d342;
            color: #292826;
            border: 1px solid transparent;
            vertical-align: middle;
            text-shadow: none;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            transition: all 0.2s;
        }

        .button:hover,
        .button:active,
        .button:focus {
            cursor: pointer;
            background: #d4b743;
            color: #292826;
            outline: 0;
        }

        .modal-open {
            overflow: hidden;
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }

        .modal {
            position: fixed;
            top: 0;
        }

    </style>
    @livewireStyles
</head>
<body class="home-1" style="">
<section class="top1">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="top-home">
                    <li class="top-home-li">
                        <div class="currency">
                            <span class="currency-head">currency:</span>
                            <div class="currency-drop">
                                <div class="eur">
                                    <img class="img-fluid" src="" alt="">
                                    <span class="cur-name">EUR</span>
                                </div>
                                <ul class="all-currency">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon4.png')}}" alt="">
                                            <span class="cur-name">AFN</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon2.png')}}" alt="">
                                            <span class="cur-name">BDT</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon3.png')}}" alt="">
                                            <span class="cur-name">CAD</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon1.png')}}" alt="">
                                            <span class="cur-name">EUR</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon5.png')}}" alt="">
                                            <span class="cur-name">GBP</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon6.png')}}" alt="">
                                            <span class="cur-name">INR</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon7.png')}}" alt="">
                                            <span class="cur-name">SAR</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon8.png')}}" alt="">
                                            <span class="cur-name">USD</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <span class="currency-head" style="margin-left: 15px">Language:</span>
                            <div class="currency-drop">
                                <div class="eur">
                                    <img class="img-fluid" src="" alt="">
                                    <span class="cur-name">En</span>
                                </div>
                                <ul class="all-currency">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon4.png')}}" alt="">
                                            <span class="cur-name">AFN</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon2.png')}}" alt="">
                                            <span class="cur-name">BDT</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img class="img-fluid" src="{{asset('assets/img/c-icon3.png')}}" alt="">
                                            <span class="cur-name">CAD</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="r-search">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="fa fa-search"></i></a>
                            <div class="modal fade" id="r-search-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="m-drop-search">
                                                <input type="text" name="search" placeholder="Search products, brands or advice">
                                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="top-home-li t-content">
                        <div class="top-content">
                            <p class="top-slogn"><span class="top-c">free shipping</span> orders from all item</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<header class="header-area">
    <div class="header-main-area is-sticky">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main">

                        <div class="header-element logo">
                            <a href="/">
                                <img src="{{asset('assets/img/logo2.png')}}" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        @livewire("header-search-component")
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap user-wrap">
                                    <div class="acc-desk">
                                        <div class="user-icon">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/account.html" class="user-icon-desk">
                                                <span><i class="fa-regular fa-user"></i></span>
                                            </a>
                                        </div>
                                        @if(Route::has("login"))
                                            @auth()
                                                <div class="user-info">
                                                    <span class="acc-title">{{Auth::user() -> name}}</span>
                                                    <div class="account-login">
                                                        @if(Auth::user()->utype === 'ADM')
                                                            <ul class="main-menu">

                                                            <li class="menu-link parent">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                                <span class="sp-link-title">Action</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>

                                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">

                                                                <li class="submenu-li">
                                                                    <a href="{{route('get.admin.login')}}">Dashboard</a>
                                                                </li>

                                                                <li class="submenu-li">
                                                                    <a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                                        @csrf
                                                                    </form>
                                                                </li>

                                                                <ul class="collapse blog-style-1" id="blog-style03">
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="sub-style"><span></span><i class="fa fa-angle-right"></i></a>
                                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                    </li>

                                                                </ul>

                                                            </ul>
                                                        </li>
                                                            </ul>

                                                        @else
                                                            <ul class="main-menu">

                                                                <li class="menu-link parent">
                                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                                        <span class="sp-link-title">Action</span>
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </a>

                                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">

                                                                        <li class="submenu-li">
                                                                            <a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                                                @csrf
                                                                            </form>
                                                                        </li>
                                                                        <ul class="collapse blog-style-1" id="blog-style03">
                                                                            <li>
                                                                                <a href="javascript:void(0)" class="sub-style"><span></span><i class="fa fa-angle-right"></i></a>
                                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                            </li>

                                                                        </ul>

                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            @endif

                                        @else
                                            <div class="user-info">
                                                <span class="acc-title">Account</span>
                                                <div class="account-login">
                                                    <a href="{{route('register')}}">Register</a>
                                                    <a href="{{route('login')}}">Login</a>
                                                </div>
                                            </div>
                                        @endif
                                        @endif
                                    </div>
                                    <div class="acc-mob">
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/account.html" class="user-icon">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </a>
                                    </div>
                                </li>
                                @livewire('wish-list-count-component')

                                <li class="side-wrap cart-wrap">
                                    <div class="shopping-widget">
                                        <div class="shopping-cart">
                                            <a href="javascript:void(0)" class="cart-count">
                                                              <span class="cart-icon-wrap">
                         <span class="cart-icon"><i class="fa-solid fa-bag-shopping"></i></span>
                          <span id="cart-total" class="bigcounter">{{$basket  -> itemCount()}}</span>
                   </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-area">
                            <div class="main-navigation navbar-expand-xl">
                                <div class="box-header menu-close">
                                    <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                </div>

                                <div class="navbar-collapse" id="navbarContent">
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link parent">
                                                    <a href="{{route('index')}}" class="link-title">
                                                        <span class="sp-link-title">Home</span>
                                                    </a>
                                                    <a href="{{route('index')}}" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="{{route('shop')}}" class="link-title">
                                                        <span class="sp-link-title">Shop</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="{{route('shop')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">@lang('messages.Categories')</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="blog-style">
                                                        @foreach($main_cats as $main_cat)
                                                            <li class="submenu-li">
                                                                <a href="{{ route('product.category',['category_slug'=>  $main_cat->slug]) }}" class="g-l-link"><span>{{$main_cat->name}}</span> <i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#blog-style03" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1" id="blog-style03">
                                                                    @foreach($main_cat->subcats as $subcat)
                                                                        @isset($subcat->name)
                                                                            <li>
                                                                                <a href="{{ route('sub-category.index', $subcat->slug) }}" class="sub-style"><span>{{$subcat->name}}</span><i class="fa fa-angle-right"></i></a>
                                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                                <ul class="grid-style collapse" id="grid1">
                                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        @endisset
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="link-title">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu">
                                                        <li class="menu-banner">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner01.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner03.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#feature1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('restaurant.index')}}" class="link-title">
                                                        <span class="sp-link-title">Restaurants</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="{{route('conversations.index')}}" class="link-title">
                                                        <span class="sp-link-title">Chat <i class="fa fa-comment"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotline">
                                    <div class="image-line">
                                        <a href="javascript:void(0)"><img src="{{asset('assets/img/icon_contact.png')}}" class="img-fluid" alt="image-icon"></a>
                                    </div>
                                    <div class="image-content">
                                        <span class="hot-l">Hotline:</span>
                                        <span>0123 456 789</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('mini-cart-component')

</header>

<div class="header-bottom-area mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-menu-area">
                    <div class="main-navigation navbar-expand-xl">
                        <div class="box-header menu-close">
                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                        </div>

                        <div class="navbar-collapse" id="navbarContent01">
                            <div class="megamenu-content">
                                <div class="mainwrap">
                                    <ul class="main-menu">
                                        <li class="menu-link parent">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html" class="link-title">
                                                <span class="sp-link-title">Home</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-home1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Home</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-home1">
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html" class="submenu-link">Vegist home 01</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist-rtl/index1.html" class="submenu-link">Vegist home 01 (RTL)</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist-box/index1.html" class="submenu-link">Vegist home 01 (BOX)</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html" class="submenu-link">Vegist home 02</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index3.html" class="submenu-link">Vegist home 03</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index4.html" class="submenu-link">Vegist home 04</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index5.html" class="submenu-link">Vegist home 05</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index6.html" class="submenu-link">Vegist home 06</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index7.html" class="submenu-link">Vegist home 07</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html" class="submenu-link">Vegist home 08</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index9.html" class="submenu-link">Vegist home 09</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index10.html" class="submenu-link">Vegist home 10</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index11.html" class="submenu-link">Vegist home 11</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Shop</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-mega-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Shop</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu1">
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Fresh food</h2>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-sub-mega-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Fresh food</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-menu1">
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Categories</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Mixedfruits</h2>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-fruits-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Mixedfruits</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu1">
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Oranges</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Coffee creamers</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Ghee beverages</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Ranch salad</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Hemp milk</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Nuts &amp; seeds</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Bananas &amp; plantains</h2>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-banana-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Bananas &amp; plantains</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-banana-menu1">
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh gala</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh berries</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fruit &amp; nut</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fifts mixed fruits</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Oranges</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Oranges</a></li>
                                                    </ul>
                                                </li>
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Apples berries</h2>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-apple-menu1" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>Apples berries</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-apple-menu1">
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Pears produce</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Bananas</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Natural grassbeab</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh green orange</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh organic reachter</a></li>
                                                        <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Balckberry 100%organic</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="link-title">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-banner-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu1">
                                                <li class="menu-banner">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner01.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner03.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Pages</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-page-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Pages</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu1">
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/about-us.html" class="submenu-link">About us</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#account-menu1" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="account-menu1">
                                                        <li>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/order-history.html" class="sub-style"><span>Order</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/order-history.html" class="blog-sub-style"><span>Order</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="sub-style"><span>Profile</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/pro-wishlist.html" class="sub-style"><span>Wishlist</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/pro-wishlist.html" class="blog-sub-style"><span>Wishlist</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/pro-tickets.html" class="sub-style"><span>My tickets</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/pro-tickets.html" class="blog-sub-style"><span>My tickets</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/billing-info.html" class="submenu-link">Billing info</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/cancellation.html" class="submenu-link">Cancellation</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="submenu-link">Cart page</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/coming-soon.html" class="submenu-link">Coming-soon</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/faq&#39;s.html" class="submenu-link">Faq's</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/forgot-password.html" class="submenu-link">Forgot passowrd</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/order-complete.html" class="submenu-link">Order complete</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/tracking.html" class="submenu-link">Track page</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/contact.html" class="submenu-link">Contact us</a>
                                                </li>

                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/privacy-policy.html" class="submenu-link">privacy policy</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/return-policy.html" class="submenu-link">Return policy</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/terms-conditions.html" class="submenu-link">Terms &amp; conditions</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="submenu-link">Wishlist</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/sitemap.html" class="submenu-link">Sitemap</a>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/fnf-page.html" class="submenu-link">4 not 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Blogs</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#blog-style1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Blogs</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu sub-menu collapse" id="blog-style1">
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Blog grid</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#blog-style031" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="blog-style031">
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-1">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-2">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-3">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-grid-blog.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-4">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-5">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-3-grid.html">Left blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-3-grid.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#grid-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="grid-6">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-3-grid.html">Blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-grid-blog.html">Right blog 3 grid</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Blog list</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#blog-style-01" data-bs-toggle="collapse" class="sub-link"><span>Blog list</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="blog-style-01">
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-1a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-1a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-list.html">Blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-list.html">Left blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-list.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-22a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-22a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-list.html">Blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-list.html">Left blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-list.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-33a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-33a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-list.html">Blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-list-blog.html">Left blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-list-blog.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-44a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-44a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-list-blog.html">Blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-list.html">Left blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-list.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-55a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-55a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-list-blog.html">Blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-list-blog.html">Left blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-list-blog.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-66a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-66a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-list-blog.html">Blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-list-blog.html">Left blog list</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-list-blog.html">Right blog list</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Blog details</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#blog-style-02" data-bs-toggle="collapse" class="sub-link"><span>Blog Details</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1 ex-width" id="blog-style-02">
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list-11a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list-11a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-details.html">Left blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list2a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list2a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-details.html">Blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-details.html">Left blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list3a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list3a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-details.html">Blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-blog-details.html">Left blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-blog-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list4a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list4a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-details.html">Blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-details.html">Left blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list5a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list5a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-details.html">Blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-details-blog.html">Left blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-details-blog.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#list6a" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                            <ul class="grid-style collapse" id="list6a">
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-details.html">Blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-details.html">Left blog details</a></li>
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-details.html">Right blog details</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-li">
                                                    <a href="javascript:void(0)" class="g-l-link"><span>Center blog</span> <i class="fa fa-angle-right"></i></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#center-blog-1" data-bs-toggle="collapse" class="sub-link"><span>Center blog</span> <i class="fa fa-angle-down"></i></a>
                                                    <ul class="collapse blog-style-1" id="center-blog-1">
                                                        <li>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-center-blog.html" class="sub-style"><span>Blog style 1</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-center-blog.html" class="blog-sub-style"><span>Blog style 1</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-center-blog.html" class="sub-style"><span>Blog style 2</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-center-blog.html" class="blog-sub-style"><span>Blog style 2</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-center-blog.html" class="sub-style"><span>Blog style 3</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-center-blog.html" class="blog-sub-style"><span>Blog style 3</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-center-blog.html" class="sub-style"><span>Blog style 4</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-center-blog.html" class="blog-sub-style"><span>Blog style 4</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-center-blog.html" class="sub-style"><span>Blog style 5</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-center-blog.html" class="blog-sub-style"><span>Blog style 5</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-center-blog.html" class="sub-style"><span>Blog style 6</span></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-center-blog.html" class="blog-sub-style"><span>Blog style 6</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{url('/reservation/step-one')}}" class="link-title">
                                                <span class="sp-link-title">Reservation</span>
                                            </a>
                                            <a href="{{url('/reservation/step-one')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Reservation</span>
                                            </a>
                                        </li>

                                        <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Buy vegist <span class="hot">Hot</span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="img-hotline">
                            <div class="image-line">
                                <a href="javascript:void(0)"><img src="{{asset('assets/img/icon_contact.png')}}" class="img-fluid" alt="image-icon"></a>
                            </div>
                            <div class="image-content">
                                <span class="hot-l">Hotline:</span>
                                <span>0123 456 789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')


@include('layouts.footer')

<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
<script>
    $(document).ready(function(){
        $('.switch-tologin-modal').on('click',function(){
            $('#register-modal').modal('hide');
            $('#login-modal').modal('show');
        })
        $('.switch-toregister-modal').on('click',function(){
            $('#login-modal').modal('hide');
            $('#register-modal').modal('show');
        })
    })
</script>
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
{{--<script src="{{asset('js/vue.js')}}"></script>--}}

<script>
    window.trans = <?php
    $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
    $trans = [];
    foreach ($lang_files as $f) {
        $filename = pathinfo($f)['filename'];
        $trans[$filename] = trans($filename);
    }
    echo json_encode($trans);
    ?>;
</script>


@yield('scripts')
</body>
</html>
