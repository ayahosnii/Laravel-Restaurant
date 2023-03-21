<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><script id="allow-copy_script">(function agent() {
        let unlock = false
        document.addEventListener('allow_copy', (event) => {
            unlock = event.detail.unlock
        })

        const copyEvents = [
            'copy',
            'cut',
            'contextmenu',
            'selectstart',
            'mousedown',
            'mouseup',
            'mousemove',
            'keydown',
            'keypress',
            'keyup',
        ]
        const rejectOtherHandlers = (e) => {
            if (unlock) {
                e.stopPropagation()
                if (e.stopImmediatePropagation) e.stopImmediatePropagation()
            }
        }
        copyEvents.forEach((evt) => {
            document.documentElement.addEventListener(evt, rejectOtherHandlers, {
                capture: true,
            })
        })
    })()</script>
<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnrM9ISkivX_c_h82WzlOx-REJHnQLKQ&callback=initMap"async defer></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Aya's Restuarant</title>
    <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories">
    <meta name="author" content="spacingtech_webify">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="https://spacingtech.com/html/vegist-final/vegist/image/fevicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/simple-line-icons.css')}}">
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.min.css')}}">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper.min.css')}}">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/customer.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('style')
    @livewireStyles()
</head>
<body class="home-1" style="">
<!-- top notificationbar start -->
<section class="top1">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="top-home">
                    <li class="top-home-li">
                        <!-- currency start -->
                        <div class="currency">
                            <span class="currency-head">currency:</span>
                            <div class="currency-drop">
                                <div class="eur">
                                    <img class="img-fluid" src="{{asset('assets/img/c-icon1.png')}}" alt="">
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
                        </div>
                        <!-- currency end -->
                        <!-- mobile search start -->
                        <div class="r-search">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="fa fa-search"></i></a>
                            <div class="modal fade" id="r-search-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="m-drop-search">
                                                <form action="{{route('search')}}" id="form-search-top" name="form-search-top">

                                                <input type="text" name="search" placeholder="Search products, brands or advice">
                                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile search end -->
                    </li>
                    <li class="top-home-li t-content">
                        <!-- offer text start -->
                        <div class="top-content">
                            <p class="top-slogn"><span class="top-c">free shipping</span> orders from all item</p>
                        </div>
                        <!-- offer text end -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- top notificationbar end -->

<!-- header start -->
<header class="header-area">
    <div class="header-main-area is-sticky">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="/">
                                <img src="{{asset('assets/img/logo2.png')}}" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- search start -->
                        @livewire("header-search-component")
                        <!-- search end -->
                        <!-- header-icon start -->
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
                                            <a href="{{route('wishlist')}}" class="user-icon-desk">
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
                                <!--cart-count-component-->

                                @livewire('cart-count-component')

                                <!--cart-count-component end-->



                            </ul>
                        </div>
                        <!-- header-icon end -->
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
                                <!-- menu start -->
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
                                                    <a href="{{route('restaurant.index')}}" class="link-title">
                                                        <span class="sp-link-title">Restaurants' meals</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="{{route('restaurant.index')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">@lang('messages.Categories')</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="blog-style">
                                                        @foreach($main_cats as $main_cat)
                                                            <li class="submenu-li">
                                                                <a href="{{ route('main-category.index',['main_category_slug'=>  $main_cat->slug]) }}" class="g-l-link"><span>{{$main_cat->name}}</span> <i class="fa fa-angle-right"></i></a>
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
                                                            <a href="{{route('bestseller')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner04.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="{{route('bestseller')}}" class="menu-banner-title"><span>Bestseller</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner01.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Sale</span></a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-link parent">
                                                    <a href="{{url('/post')}}" class="link-title">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                    <a href="{{url('/post')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
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
                                                    <a href="{{route('conversations.index')}}" class="link-title">
                                                        <span class="sp-link-title">Chat <i class="fa fa-comment"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- menu end -->
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
<!-- header end -->
<!-- mobile menu start -->
<div class="header-bottom-area mobile">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-menu-area">
                    <div class="main-navigation navbar-expand-xl">
                        <div class="box-header menu-close">
                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                        </div>
                        <!-- menu start -->
                        <div class="navbar-collapse" id="navbarContent01">
                            <div class="megamenu-content">
                                <div class="mainwrap">
                                    <ul class="main-menu">
                                        <li class="menu-link parent">
                                            <a href="{{route('index')}}" class="link-title">
                                                <span class="sp-link-title">Home</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="{{route('index')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Home</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{route('restaurant.index')}}" class="link-title">
                                                <span class="sp-link-title">Shop</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#collapse-mega-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Restaurants' meal</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu1">
                                                @foreach($main_cats as $main_cat)
                                                <li class="megamenu-li parent">
                                                    <h2 class="sublink-title">Fresh food</h2>
                                                    <a href="{{ route('main-category.index',['main_category_slug'=>  $main_cat->slug]) }}#collapse-sub-mega-{{$main_cat->slug}}" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <span>{{$main_cat->name}}</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-{{$main_cat->slug}}">
                                                        @if(isset($main_cat->subcats))
                                                        @foreach($main_cat->subcats as $subcat)
                                                        <li class="supmenu-li"><a href="{{ route('sub-category.index', $subcat->slug) }}">{{$subcat->name}}</a></li>
                                                            @endforeach
                                                        @endif
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
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#collapse-banner-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu1">
                                                <li class="menu-banner">
                                                    <a href="{{route('bestseller')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner04.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                    <a href="{{route('bestseller')}}" class="menu-banner-title"><span>Bestseller</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner01.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Sale</span></a>
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
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/payment-policy.html" class="submenu-link">Payment policy</a>
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
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-list-blog.html">Blog list</a></li><!--list-->
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-list-blog.html">Left blog list</a></li><!--list-->
                                                                <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-list-blog.html">Right blog list</a></li><!--list-->
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
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Feature</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#feature-1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Feature</span>
                                                <i class="fa fa-angle-down"></i>
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
                        <!-- menu end -->
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


{{$slot}}


{{--

<section class="footer-one section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-service section-b-padding">
                    <ul class="service-ul">
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                            <span>Free delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                            <span>Cash on delivery</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                            <span>30 Days returns</span>
                        </li>
                        <li class="service-li">
                            <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                            <span>Online support</span>
                        </li>
                    </ul>
                </div>
                <div class="f-logo">
                    <ul class="footer-ul">
                        <li class="footer-li footer-logo">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html">
                                <img class="img-fluid" src="{{asset('assets/img/c-icon1.png')}}logo1.png" alt="">
                            </a>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-location"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Address</h6>
                                    <span>401 Broadway 24th floor</span>
                                    <span>Near ant mall cross road</span>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-contact">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-telephone"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Contact</h6>
                                    <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                    <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-help"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Help</h6>
                                    <span>Lorem ipsum is simply</span>
                                    <span>Dummy the printing</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer-bottom section-t-padding">
                    <div class="footer-link" id="footer-accordian">
                        <div class="f-link">
                            <h2 class="h-footer">Top categories</h2>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#t-cate" data-bs-toggle="collapse" class="h-footer">
                                <span>Top categories</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html">Fruits</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html">Fast foods</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html">Vegetable</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html">Salads</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html">Bestseller</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Services</h2>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#services" data-bs-toggle="collapse" class="h-footer">
                                <span>Services</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/about-us.html">About vegist</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/faq&#39;s.html">Faq's</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/contact.html">Contact us</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html">News</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/sitemap.html">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Privacy &amp; terms</h2>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#privacy" data-bs-toggle="collapse" class="h-footer">
                                <span>Privacy &amp; terms</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/payment-policy.html">Payment policy</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/privacy-policy.html">Privacy policy</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/return-policy.html">Return policy</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/shipping-policy.html">Shipping policy</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/terms-conditions.html">Terms &amp; conditions</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">My account</h2>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html#account" data-bs-toggle="collapse" class="h-footer">
                                <span>My account</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/account.html">My account</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/cart.html">My cart</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/tracking.html">Order history</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html">My wishlist</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/addresses.html">My address</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->
<!-- footer copyright start -->
<section class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="f-bottom">
                    <li class="f-c f-copyright">
                        <p>Copyright <i class="fa fa-copyright"></i> 2021 spacingtech</p>
                    </li>
                    <li class="f-c f-social">
                        <a href="https://www.whatsapp.com/" class="f-icn-link"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/" class="f-icn-link"><i class="fa fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" class="f-icn-link"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" class="f-icn-link"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.pinterest.com/" class="f-icn-link"><i class="fa fa-pinterest-p"></i></a>
                        <a href="https://www.youtube.com/" class="f-icn-link"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="f-c f-payment">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-1.html"><img src="{{asset('assets/img/c-icon1.png')}}payment.png" class="img-fluid" alt="payment image"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>--}}
<!-- footer copyright end -->
<!-- back to top start -->
<a href="javascript:void(0)" class="scroll show" id="top">
    <span><i class="fa fa-angle-double-up"></i></span>
</a>
<!-- back to top end -->
<div class="mm-fullscreen-bg"></div>
<!-- jquery -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- jquery UI -->
<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
<!-- imagesLoaded -->
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<!-- WOW -->
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- popper -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- fontawesome -->
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
<!-- owl carousal -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- swiper -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<!-- custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/shop.js')}}"></script>

<!-- modernizr -->
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<!-- swup -->
<script src="{{asset('assets/js/swup.min.js')}}"></script>

@yield('scripts')
@livewireScripts()
@stack('scripts')


</body>
</html>
