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
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{asset('asstes/images/waiter.png')}}">
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
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>

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
                            <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="fa fa-search"></i></a>
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
                                                                    <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
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

                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        @else
                                                            <ul class="main-menu">

                                                                <li class="menu-link parent">
                                                                    <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
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
                                                                <a href="#blog-style03" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                                <ul class="collapse blog-style-1" id="blog-style03">
                                                                    @foreach($main_cat->subcats as $subcat)
                                                                        @isset($subcat->name)
                                                                            <li>
                                                                                <a href="{{ route('sub-category.index', $subcat->slug) }}" class="sub-style"><span>{{$subcat->name}}</span><i class="fa fa-angle-right"></i></a>
                                                                                <a href="#grid1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                            </li>
                                                                        @endisset
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="/" class="link-title">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu">
                                                        <li class="menu-banner">
                                                            <a href="{{route('bestseller')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner04.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="{{route('bestseller')}}" class="menu-banner-title"><span>Bestseller</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="{{route('special.meal')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                            <a href="{{route('special.meal')}}" class="menu-banner-title"><span>Special product</span></a>
                                                        </li>
                                                        <li class="menu-banner">
                                                            <a href="{{route('sales')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner01.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                            <a href="{{route('sales')}}" class="menu-banner-title"><span>Sale</span></a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="menu-link parent">
                                                    <a href="{{url('/blog')}}" class="link-title">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                    <a href="{{url('/blog')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link parent">
                                                    <a href="{{route('restaurant.all')}}" class="link-title">
                                                        <span class="sp-link-title">All Restaurants</span>
                                                    </a>
                                                    <a href="{{route('restaurant.all')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">All Restaurants</span>
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
                                        <span class="hot-l">Aya:</span>
                                        <span>01006215138</span>
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
                                            <a href="{{route('restaurant.index')}}" class="sp-link-title">Restaurants' meal</a>
                                            <a href="#collapse-mega-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu1">
                                                @foreach($main_cats as $main_cat)
                                                <li class="megamenu-li parent">
                                                    <a href="{{ route('main-category.index',['main_category_slug'=>  $main_cat->slug]) }}">{{$main_cat->name}}</a>
                                                    <a href="{{ route('main-category.index',['main_category_slug'=>  $main_cat->slug]) }}#collapse-sub-mega-{{$main_cat->slug}}" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-{{$main_cat->slug}}">
                                                        @if(isset($main_cat->subcats))
                                                        @foreach($main_cat->subcats as $subcat)
                                                        <li class="supmenu-li">
                                                            <a href="{{ route('sub-category.index', $subcat->slug) }}">{{$subcat->name}}</a>
                                                        </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="#" class="link-title">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <a href="#collapse-banner-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu1">
                                                <li class="menu-banner">
                                                    <a href="{{route('bestseller')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner04.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                    <a href="{{route('bestseller')}}" class="menu-banner-title"><span>Bestseller</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="{{route('special.meal')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner02.jpg')}}" alt="menu-image" class="img-fluid"></a>
                                                    <a href="{{route('special.meal')}}" class="menu-banner-title"><span>Special product</span></a>
                                                </li>
                                                <li class="menu-banner">
                                                    <a href="{{route('sales')}}" class="menu-banner-img"><img src="{{asset('assets/img/menu-banner01.jpg')}}" alt="mneu image" class="img-fluid"></a>
                                                    <a href="{{route('sales')}}" class="menu-banner-title"><span>Sale</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Blog</span>
                                            </a>
                                            <a href="{{url('/blog')}}" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                <span class="sp-link-title">Blog</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('restaurant.all')}}" class="link-title">
                                                <span class="sp-link-title">All Restaurants</span>
                                            </a>
                                        </li>
                                        <li class="menu-link">
                                            <a href="{{route('reservations')}}" class="link-title">
                                                <span class="sp-link-title">Reservations</span>
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


{{$slot}}




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
                            <a href="">
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
                        <a href={{route('checkout')}}"><img src="{{asset('assets/img/c-icon1.png')}}payment.png" class="img-fluid" alt="payment image"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/641a7df031ebfa0fe7f3f5a6/1gs3nnt21';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
