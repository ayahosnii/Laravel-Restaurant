<!DOCTYPE html>
<!-- saved from url=(0060)https://spacingtech.com/html/vegist-final/vegist/index2.html -->
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
    })()</script
>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Providers's Dashboard</title>
    <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{asset('asstes/images/waiter.png')}}">



    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="./Vegist - dashboard_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./Vegist - dashboard_files/owl.theme.default.min.css">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="./Vegist - dashboard_files/swiper.min.css">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="./Vegist - dashboard_files/animate.css">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="./Vegist - dashboard_files/style2.css">
    <link rel="stylesheet" type="text/css" href="./Vegist - dashboard_files/responsive2.css">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{asset('asstes/images/waiter.png')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/bootstrap.min.css')}}">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/simple-line-icons.css')}}">
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/themify-icons.css')}}">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/ionicons.min.css')}}">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/owl.theme.default.min.css')}}">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/swiper.min.css')}}">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/animate.css')}}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/style2.css')}}">
{{--
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
--}}
    <link rel="stylesheet" type="text/css" href="{{asset('provider-assets/css/responsive.css')}}">



    <style>
        .form__input {
            font-family: 'Roboto', sans-serif;
            color: #333;
            font-size: 18px;
            margin-bottom: 1rem;
            margin: 0.5rem;
            padding: 1rem 1.5rem;
            border-radius: 0.2rem;
            background-color: rgb(255, 255, 255);
            width: 500px;
            display: block;
            transition: all 0.3s;
            border:0.5px solid #969696 w3-round-large;
        }
        .form__input:hover {
            border:2px solid #f5ab1e;
        }



        /*// **** ==== Slider v3 ==== **** //*/

        /*// ********** Background:*/
           .slider-v3 {
               position: relative; display: block;
               width: 7em; height: 3em;
               cursor: pointer;
               border-radius: 1.5em;
               transition: 350ms;
               background: #ddd;
           }

        /*// ********** Switch:*/
           .slider-v3::after {
               position: absolute; content:'';
               width: 2em; height: 2em;
               top: 0.5em; left: 0.5em;
               border-radius: 2.5em;
               transition:
                   width 200ms ease-out,
                   height 300ms 50ms ease-in,
                   top 300ms 50ms ease-in,
                   left 250ms 50ms ease-in,
                   background 300ms ease-in,
                   box-shadow 300ms ease-in;
               background: #f2f2f2;
               box-shadow: 0 0 0 1.5em #f2f2f2 inset;
           }

        input:checked + .slider-v3::after {
            width: 4em; height: 3em;
            top: 0; left: 3em;
            background: #5fa800;
            box-shadow: 0 0 0 0 #f2f2f2 inset;
        }

        /*##########################################*/
        /* hide input */
        input.radio:empty {
            margin-left: -999px;
        }

        /* style label */
        input.radio:empty ~ label {
            position: relative;
            float: left;
            line-height: 2.5em;
            text-indent: 3.25em;
            margin-top: 2em;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        input.radio:empty ~ label:before {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2.5em;
            background: #D1D3D4;
            border-radius: 3px 0 0 3px;
        }

        /* toggle hover */
        input.radio:hover:not(:checked) ~ label:before {
            content:'\2714';
            text-indent: .9em;
            color: #C2C2C2;
        }

        input.radio:hover:not(:checked) ~ label {
            color: #888;
        }

        /* toggle on */
        input.radio:checked ~ label:before {
            content:'\2714';
            text-indent: .9em;
            color: #ffffff;
            background-color: #5fa800;
        }

        input.radio:checked ~ label {
            color: #777;
        }

        /* radio focus */
        input.radio:focus ~ label:before {
            box-shadow: 0 0 0 3px #999;
        }


    </style>

    <style>
        h1{
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }
        table{
            width:100%;
            table-layout: fixed;
        }
        .tbl-header{
            background-color: rgba(255,255,255,0.3);
        }
        .tbl-content{
            height:300px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid rgba(255,255,255,0.3);
        }
        th{
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }
        td{
            padding: 15px;
            text-align: left;
            vertical-align:middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255,255,255,0.1);
        }


        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        .aya{
            background: -webkit-linear-gradient(left, #49a09d, #5f2c82);
            background: linear-gradient(to right, #49a09d, #5f2c82);
            font-family: 'Roboto', sans-serif;
        }
        section{
            margin: 50px;
        }

        /* follow me template */
        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;
        }
        .made-with-love i {
            font-style: normal;
            color: #F50057;
            font-size: 14px;
            position: relative;
            top: 2px;
        }
        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }
        .made-with-love a:hover {
            text-decoration: underline;
        }


        /* for custom scrollbar for webkit browser*/

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="" style="">z
<!-- top notificationbar start -->
<section class="top-2" style="background-image: url(image/top-2.jpg);">
    <div class="container">
        <div class="row ">
            <div class="col">
                <ul class="top-home">
                    <li class="top-home-li t-content">
                        <!-- offer text start -->
                        <div class="top-content">
                            <p class="top-slogn"><span class="top-c">free shipping</span> orders from all item</p>
                        </div>
                        <!-- offer text end -->
                    </li>
                    <li class="top-home-li">
                        <!-- login start -->
                        <div class="currency">
                            <div class="currency-drop">
                                <ul class="cry">
                                    <li class="eur-head">
                                        <span class="eur">account <i class="fa fa-angle-down"></i></span>
                                        <ul class="all-currency account-details">
                                            <li><a href="">register / log in</a></li>
                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/checkout-2.html">checkout</a></li>
                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html">my wishlist</a></li>
                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/tracking.html">order history</a></li>
                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/cart-2.html">my cart</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- login end -->
                        <!-- currency start -->
                        <div class="currency">
                            <div class="currency-drop">
                                <ul class="cry">
                                    <li class="eur-head">
                                        <span class="eur"><img src="./Vegist - dashboard_files/c-icon1.png" alt="currency icon"> EUR <i class="fa fa-angle-down"></i></span>
                                        <ul class="all-currency all-drop-currency">
                                            <li><a href="javascript:void(0)"><img src="./Vegist - dashboard_files/c-icon4.png" alt="currency icon"> AFN</a></li>
                                            <li><a href="javascript:void(0)"><img src="./Vegist - dashboard_files/c-icon2.png" alt="currency icon"> BDT</a></li>
                                            <li><a href="javascript:void(0)"><img src="./Vegist - dashboard_files/c-icon3.png" alt="currency icon"> CAD</a></li>
                                            <li><a href="javascript:void(0)"><img src="./Vegist - dashboard_files/c-icon5.png" alt="currency icon"> GBP</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- currency start -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- header start -->
<header class="header-area">
    <div class="header-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-main">
                        <!-- logo start -->
                        <div class="header-element logo">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html">
                                <img src="./Vegist - dashboard_files/logo2.png" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- main menu start -->
                        <div class="header-element megamenu-content">
                            <div class="mainwrap">
                                <ul class="main-menu">
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Home</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Home</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
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
                                            <li class="submenu-li">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index12.html" class="submenu-link">Vegist home 12</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Shop</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Shop</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu mega-menu collapse" id="collapse-top-mega-menu">
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Fresh food</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Fresh food</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-sub-mega-menu">
                                                    <li class="supmenu-li"><a href="">Fruit &amp; nut</a></li>
                                                    <li class="supmenu-li"><a href="">Snack food</a></li>
                                                    <li class="supmenu-li"><a href="">Organics nut gifts</a></li>
                                                    <li class="supmenu-li"><a href="">Non-dairy</a></li>
                                                    <li class="supmenu-li"><a href="">Mayonnaise</a></li>
                                                    <li class="supmenu-li"><a href="">Milk almond</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Mixedfruits</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-fruits-menu">
                                                    <li class="supmenu-li"><a href="">Oranges</a></li>
                                                    <li class="supmenu-li"><a href="">Coffee creamers</a></li>
                                                    <li class="supmenu-li"><a href="">Ghee beverages</a></li>
                                                    <li class="supmenu-li"><a href="">Ranch salad</a></li>
                                                    <li class="supmenu-li"><a href="">Hemp milk</a></li>
                                                    <li class="supmenu-li"><a href="">Nuts &amp; seeds</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Bananas &amp; plantains</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Bananas &amp; plantains</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-banana-menu">
                                                    <li class="supmenu-li"><a href="">Fresh gala</a></li>
                                                    <li class="supmenu-li"><a href="">Fresh berries</a></li>
                                                    <li class="supmenu-li"><a href="">Fruit &amp; nut</a></li>
                                                    <li class="supmenu-li"><a href="">Fifts mixed fruits</a></li>
                                                    <li class="supmenu-li"><a href="">Oranges</a></li>
                                                    <li class="supmenu-li"><a href="">Oranges</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Apples berries</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Apples berries</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="collapse-top-apple-menu">
                                                    <li class="supmenu-li"><a href="">Pears produce</a></li>
                                                    <li class="supmenu-li"><a href="">Bananas</a></li>
                                                    <li class="supmenu-li"><a href="">Natural grassbeab</a></li>
                                                    <li class="supmenu-li"><a href="">Fresh green orange</a></li>
                                                    <li class="supmenu-li"><a href="">Fresh organic reachter</a></li>
                                                    <li class="supmenu-li"><a href="">Balckberry 100%organic</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Collection</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Collection</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu banner-menu collapse" id="collapse-top-banner-menu">
                                            <li class="menu-banner">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="./Vegist - dashboard_files/menu-banner01.jpg" alt="menu-image" class="img-fluid"></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                            </li>
                                            <li class="menu-banner">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="./Vegist - dashboard_files/menu-banner02.jpg" alt="menu-image" class="img-fluid"></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                            </li>
                                            <li class="menu-banner">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="./Vegist - dashboard_files/menu-banner03.jpg" alt="mneu image" class="img-fluid"></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <span class="sp-link-title">Pages</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-top-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Pages</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-page-menu">
                                            <li class="submenu-li">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/about-us.html" class="submenu-link">About us</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#account-menu" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                <ul class="collapse blog-style-1" id="account-menu">
                                                    <li>
                                                        <a href="{{route('order-history')}}" class="sub-style"><span>Order</span></a>
                                                        <a href="{{route('order-history')}}" class="blog-sub-style"><span>Order</span></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="sub-style"><span>Profile</span></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                        <a href="{{route('wishlist')}}" class="sub-style"><span>Wishlist</span></a>
                                                        <a href="{{route('wishlist')}}" class="blog-sub-style"><span>Wishlist</span></a>
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
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-style" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Blogs</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu sub-menu collapse" id="blog-style">
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="g-l-link"><span>Blog grid</span> <i class="fa fa-angle-right"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-style03" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                <ul class="collapse blog-style-1" id="blog-style03">
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="grid1">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="grid2">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-3-grid.html">Blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-3-grid.html">Left blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-3-grid.html">Right blog 3 grid</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="grid3">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-grid.html">Blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-grid-blog.html">Left blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-grid-blog.html">Right blog 3 grid</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="grid4">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-3-grid.html">Blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-3-grid.html">Left blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-3-grid.html">Right blog 3 grid</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="grid5">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-3-grid.html">Blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-3-grid.html">Left blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-3-grid.html">Right blog 3 grid</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="grid6">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-3-grid.html">Blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-grid-blog.html">Left blog 3 grid</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-grid-blog.html">Right blog 3 grid</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="g-l-link"><span>Blog list</span> <i class="fa fa-angle-right"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-style01" data-bs-toggle="collapse" class="sub-link"><span>Blog list</span> <i class="fa fa-angle-down"></i></a>
                                                <ul class="collapse blog-style-1" id="blog-style01">
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-1">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-list.html">Blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-list.html">Left blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-list.html">Right blog list</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-22" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-22">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-list.html">Blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-list.html">Left blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-list.html">Right blog list</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-33" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-33">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-list.html">Blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-list-blog.html">Left blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-list-blog.html">Right blog list</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-44" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-44">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-list-blog.html">Blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-list.html">Left blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-list.html">Right blog list</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-55" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-55">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-list-blog.html">Blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-list-blog.html">Left blog list</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-list-blog.html">Right blog list</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-66" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-66">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-list-blog.html">Blog list</a></li><!--list-->
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-list-blog.html">Left blog list</a></li><!--list-->
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-list-blog.html">Right blog list</a></li><!--list-->
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="g-l-link"><span>Blog details</span> <i class="fa fa-angle-right"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-style02" data-bs-toggle="collapse" class="sub-link"><span>Blog Details</span> <i class="fa fa-angle-down"></i></a>
                                                <ul class="collapse blog-style-1 ex-width" id="blog-style02">
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list-11" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list-11">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-details.html">Left blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-details.html">Right blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list2">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-details.html">Blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-details.html">Left blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-details.html">Right blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list3">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-details.html">Blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-blog-details.html">Left blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-blog-details.html">Right blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list4">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-details.html">Blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-details.html">Left blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-details.html">Right blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list5">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-details.html">Blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-details-blog.html">Left blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-details-blog.html">Right blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#list6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                        <ul class="grid-style collapse" id="list6">
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-details.html">Blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-details.html">Left blog details</a></li>
                                                            <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-details.html">Right blog details</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="g-l-link"><span>Center blog</span> <i class="fa fa-angle-right"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#center-blog" data-bs-toggle="collapse" class="sub-link"><span>Center blog</span> <i class="fa fa-angle-down"></i></a>
                                                <ul class="collapse blog-style-1" id="center-blog">
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
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Feature</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu mega-menu collapse" id="feature1">
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Header style</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature01" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Header style</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature01">
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-1.html">Header style 1</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-2.html">Header style 2</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-3.html">Header style 3</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-4.html">Header style 4</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-5.html">Header style 5</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-6.html">Header style 6</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-7.html">Header style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Footer style</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature02" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Footer style</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature02">
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-1.html">Footer style 1</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-2.html">Footer style 2</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-3.html">Footer style 3</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-4.html">Footer style 4</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-5.html">Footer style 5</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-6.html">Footer style 6</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-7.html">Footer style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Product details</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature03" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Product details</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature03">
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Product details style 1</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Product details style 2</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-3.html">Product details style 3</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-4.html">Product details style 4</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-5.html">Product details style 5</a></li>
                                                    <li class="supmenu-li"><a href="">Product details style 6</a></li>
                                                    <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-7.html">Product details style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-li parent">
                                                <h2 class="sublink-title">Other style</h2>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature04" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span>Other style</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-supmenu collapse" id="feature04">
                                                    <li class="supmenu-li"><a href="{{route('checkout')}}">Checkout</a></li>
                                                    <li class="supmenu-li"><a href="{{route('site.cart.index')}}">Cart</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- main menu end -->
                        <!-- header icon start -->
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap search-wrap">
                                    <div class="search-rap">
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                    </div>
                                </li>

                                <li class="side-wrap wishlist-wrap">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="header-wishlist">
                                        <span class="wishlist-icon"><i class="fa-solid fa-messages"></i></span>
                                        <span class="wishlist-counter">0</span>
                                    </a>
                                </li>




                                <li class="side-wrap cart-wrap">
                                    <div class="shopping-widget">
                                        <div class="shopping-cart">
                                            <a href="javascript:void(0)" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="fa-solid fa-bell"></i></span>
                                                            <span id="cart-total" class="bigcounter">5</span>
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- header icon end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu start -->
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
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Home</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Home</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="collapse-home">
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
                                                    <li class="submenu-li">
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index12.html" class="submenu-link">Vegist home 12</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-sub-mega-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-sub-mega-menu">
                                                            <li class="supmenu-li"><a href="">Fruit &amp; nut</a></li>
                                                            <li class="supmenu-li"><a href="">Snack food</a></li>
                                                            <li class="supmenu-li"><a href="">Organics nut gifts</a></li>
                                                            <li class="supmenu-li"><a href="">Non-dairy</a></li>
                                                            <li class="supmenu-li"><a href="">Mayonnaise</a></li>
                                                            <li class="supmenu-li"><a href="">Milk almond</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-fruits-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu">
                                                            <li class="supmenu-li"><a href="">Oranges</a></li>
                                                            <li class="supmenu-li"><a href="">Coffee creamers</a></li>
                                                            <li class="supmenu-li"><a href="">Ghee beverages</a></li>
                                                            <li class="supmenu-li"><a href="">Ranch salad</a></li>
                                                            <li class="supmenu-li"><a href="">Hemp milk</a></li>
                                                            <li class="supmenu-li"><a href="">Nuts &amp; seeds</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas &amp; plantains</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-banana-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Bananas &amp; plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-banana-menu">
                                                            <li class="supmenu-li"><a href="">Fresh gala</a></li>
                                                            <li class="supmenu-li"><a href="">Fresh berries</a></li>
                                                            <li class="supmenu-li"><a href="">Fruit &amp; nut</a></li>
                                                            <li class="supmenu-li"><a href="">Fifts mixed fruits</a></li>
                                                            <li class="supmenu-li"><a href="">Oranges</a></li>
                                                            <li class="supmenu-li"><a href="">Oranges</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-apple-menu" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-apple-menu">
                                                            <li class="supmenu-li"><a href="">Pears produce</a></li>
                                                            <li class="supmenu-li"><a href="">Bananas</a></li>
                                                            <li class="supmenu-li"><a href="">Natural grassbeab</a></li>
                                                            <li class="supmenu-li"><a href="">Fresh green orange</a></li>
                                                            <li class="supmenu-li"><a href="">Fresh organic reachter</a></li>
                                                            <li class="supmenu-li"><a href="">Balckberry 100%organic</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-banner-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu banner-menu collapse" id="collapse-banner-menu">
                                                    <li class="menu-banner">
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="./Vegist - dashboard_files/menu-banner01.jpg" alt="menu-image" class="img-fluid"></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Bestseller</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="./Vegist - dashboard_files/menu-banner02.jpg" alt="menu-image" class="img-fluid"></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Special product</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-img"><img src="./Vegist - dashboard_files/menu-banner03.jpg" alt="mneu image" class="img-fluid"></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="menu-banner-title"><span>Featured product</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                    <li class="submenu-li">
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/about-us.html" class="submenu-link">About us</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Account</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#account-menu01" data-bs-toggle="collapse" class="sub-link"><span>Account</span> <i class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="account-menu01">
                                                            <li>
                                                                <a href="{{route('order-history')}}" class="sub-style"><span>Order</span></a>
                                                                <a href="{{route('order-history')}}" class="blog-sub-style"><span>Order</span></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="sub-style"><span>Profile</span></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="blog-sub-style"><span>Profile</span></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html" class="sub-style"><span>Address</span></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html" class="blog-sub-style"><span>Address</span></a>
                                                                <a href="{{route('wishlist')}}" class="sub-style"><span>Wishlist</span></a>
                                                                <a href="{{route('wishlist')}}" class="blog-sub-style"><span>Wishlist</span></a>
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

                                            <li class="menu-link parent side-wrap cart-wrap">
                                                <div class="shopping-widget">
                                                    <div class="shopping-cart">
                                                        <a href="javascript:void(0)" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="fa-solid fa-bell"></i></span>
                                                            <span id="cart-total" class="bigcounter">5</span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Blogs</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-grid-style01" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Blogs</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="blog-grid-style01">
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Blog grid</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-style-03" data-bs-toggle="collapse" class="sub-link"><span>Blog grid</span> <i class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="blog-style-03">
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-1">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html">Blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-3-grid.html">Left blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-3-grid.html">Right blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-2">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-3-grid.html">Blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-3-grid.html">Left blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-3-grid.html">Right blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-3">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-grid.html">Blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-grid-blog.html">Left blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-grid-blog.html">Right blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-4">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-3-grid.html">Blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-3-grid.html">Left blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-3-grid.html">Right blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-5">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-3-grid.html">Blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-3-grid.html">Left blog 3 grid</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-3-grid.html">Right blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#grid-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
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
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-style" data-bs-toggle="collapse" class="sub-link"><span>Blog list</span> <i class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="blog-list-style">
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-list-1">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-list.html">Blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-list.html">Left blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-list.html">Right blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-list-2">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-list.html">Blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-list.html">Left blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-list.html">Right blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-list-3">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-list.html">Blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-list-blog.html">Left blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-list-blog.html">Right blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-list-4">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-list-blog.html">Blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-list.html">Left blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-list.html">Right blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-list-5">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-list-blog.html">Blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-list-blog.html">Left blog list</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-list-blog.html">Right blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-list-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-list-6">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-list-blog.html">Blog list</a></li><!--list-->
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-list-blog.html">Left blog list</a></li><!--list-->
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-list-blog.html">Right blog list</a></li><!--list-->
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Blog details</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-style" data-bs-toggle="collapse" class="sub-link"><span>Blog Details</span> <i class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1 ex-width" id="blog-details-style">
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-1" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-details-1">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-left-details.html">Left blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-right-details.html">Right blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-2" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-details-2">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-details.html">Blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-left-details.html">Left blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-right-details.html">Right blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-3" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-details-3">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-details.html">Blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-left-blog-details.html">Left blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-3-right-blog-details.html">Right blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-4" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-details-4">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-details.html">Blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-left-details.html">Left blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-5-right-details.html">Right blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-5" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-details-5">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-details.html">Blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-left-details-blog.html">Left blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-6-right-details-blog.html">Right blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#blog-details-6" data-bs-toggle="collapse" class="blog-sub-style"><span>Blog details style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="blog-details-6">
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-details.html">Blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-left-details.html">Left blog details</a></li>
                                                                    <li><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-right-details.html">Right blog details</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Center blog</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#center-b" data-bs-toggle="collapse" class="sub-link"><span>Center blog</span> <i class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="center-b">
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
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature10" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Feature</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu mega-menu collapse" id="feature10">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Header style</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature08" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Header style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature08">
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-1.html">Header style 1</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-2.html">Header style 2</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-3.html">Header style 3</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-4.html">Header style 4</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-5.html">Header style 5</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-6.html">Header style 6</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/header-style-7.html">Header style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Footer style</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature07" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Footer style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature07">
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-1.html">Footer style 1</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-2.html">Footer style 2</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-3.html">Footer style 3</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-4.html">Footer style 4</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-5.html">Footer style 5</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-6.html">Footer style 6</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/footer-style-7.html">Footer style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Product details</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature06" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Product details</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature06">
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Product details style 1</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Product details style 2</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-3.html">Product details style 3</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-4.html">Product details style 4</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-5.html">Product details style 5</a></li>
                                                            <li class="supmenu-li"><a href="">Product details style 6</a></li>
                                                            <li class="supmenu-li"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-7.html">Product details style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Other style</h2>
                                                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#feature05" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span>Other style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature05">
                                                            <li class="supmenu-li"><a href="{{route('checkout')}}">Checkout</a></li>
                                                            <li class="supmenu-li"><a href="{{route('site.cart.index')}}">Cart</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu end -->
    <!-- minicart start -->
    <div class="mini-cart">
        <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
        <div class="cart-item-title">
            <p>
                <span class="cart-count-desc">There are</span>
                <span class="cart-count-item bigcounter">4</span>
                <span class="cart-count-desc">Products</span>
            </p>
        </div>
        <ul class="cart-item-loop">
            <li class="cart-item">
                <div class="cart-img">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">
                        <img src="./Vegist - dashboard_files/cart-img.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Fresh apple 5kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">
                        <img src="./Vegist - dashboard_files/cart-img02.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Natural grassbean 4kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$300.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">
                        <img src="./Vegist - dashboard_files/cart-img03.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Organic coconut juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">
                        <img src="./Vegist - dashboard_files/cart-img04.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Orange juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$350.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="subtotal-title-area">
            <li class="subtotal-info">
                <div class="subtotal-titles">
                    <h6>Sub total:</h6>
                    <span class="subtotal-price">$750.00 USD</span>
                </div>
            </li>
            <li class="mini-cart-btns">
                <div class="cart-btns">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/cart-2.html" class="btn btn-style2">View cart</a>
                    <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-2.html" class="btn btn-style2">Checkout</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- minicart end -->
    <!-- search start -->
    <div class="modal fade" id="search-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="search-content">
                                    <div class="search-engine">
                                        <input type="text" name="search" placeholder="Search products,brands or advice">
                                        <button class="search-btn" type="button"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search end -->
</header>
<!-- header end -->
<!--home page slider start-->
<section class="home-slider-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="menu-slider">
                    <div class="vegamenu-content">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#vega-menu" data-bs-toggle="collapse" class="vegamenu-title" aria-expanded="true">
                            <span class="menu-icon"><i class="fa-solid fa-house"></i></span>
                            <span class="menu-cat-title">Providers Dashboard</span>
                        </a>
                        <div class="main-wrap collapse show" id="vega-menu" style="">
                            <ul class="vega-menu">
                                <li class="menu-link">
                                    <a href="{{route('providers.profile', $profiles->id)}}" class="link-title">
                                        <i class="fa-solid fa-user"></i>
                                        <span>Restaurant Profile</span>
                                    </a>
                                    <a href="{{route('providers.profile', $profiles->id)}}" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <i class="fa-solid fa-user"></i>
                                        <span>Restaurant Profile</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <li class="menu-link parent">
                                    <a href="javascript:void(0)" class="link-title">
                                        <i class="fa-solid fa-bars"></i>
                                        <span>Categories</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#fresh-fruits3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <img src="./Vegist - dashboard_files/image01.jpg" alt="menu-image">
                                        <span>Categories</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu collapse" id="fresh-fruits3">
                                        <li class="submenu-li parant">
                                            <h6>Sections</h6>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#left-menu-b3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                                <span>Popular searches</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu-megamenu-link collapse" id="left-menu-b3">
                                                <li class="left-menu-link"><a href="{{route('categories')}}">All Categories</a></li>
                                                <li class="left-menu-link"><a href="{{route('categories.create')}}">Add New Categories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-link parent">
                                    <a href="javascript:void(0)" class="link-title">
                                        <i class="fa-solid fa-utensils"></i>
                                        <span>Branches</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#fresh-fruits3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <i class="fa-solid fa-utensils"></i>
                                        <span>Branches</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu collapse" id="fresh-fruits3">
                                        <li class="submenu-li parant">
                                            <h6>Sections</h6>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#left-menu-b3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                                <span>Sections</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu-megamenu-link collapse" id="left-menu-b3">
                                                <li class="left-menu-link"><a href="{{route('branch.all')}}">All branchs</a></li>
                                                <li class="left-menu-link"><a href="{{route('branch.create')}}">Add new branch</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-link parent">
                                    <a href="javascript:void(0)" class="link-title">
                                        <i class="fa-solid fa-burger"></i>
                                        <span>Meals</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#fresh-fruits3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <img src="./Vegist - dashboard_files/image01.jpg" alt="menu-image">
                                        <span>Meals</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu collapse" id="fresh-fruits3">
                                        <li class="submenu-li parant">
                                            <h6>Sections</h6>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#left-menu-b3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                                <span>Popular searches</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu-megamenu-link collapse" id="left-menu-b3">
                                                <li class="left-menu-link"><a href="{{route('meals')}}">All Meals</a></li>
                                                <li class="left-menu-link"><a href="{{route('meals.create')}}">Add New Meals</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-link parent">
                                    <a href="javascript:void(0)" class="link-title">
                                        <i class="fa-solid fa-utensils"></i>
                                        <span>Tables</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#fresh-fruits3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <img src="./Vegist - dashboard_files/image01.jpg" alt="menu-image">
                                        <span>Tables</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu collapse" id="fresh-fruits3">
                                        <li class="submenu-li parant">
                                            <h6>Sections</h6>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#left-menu-b3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                                <span>Popular searches</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu-megamenu-link collapse" id="left-menu-b3">
                                                <li class="left-menu-link"><a href="{{route('tables')}}">All Tables</a></li>
                                                <li class="left-menu-link"><a href="{{route('tables.create')}}">Add New Tables</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-link parent">
                                    <a href="javascript:void(0)" class="link-title">
                                        <i class="fa-solid fa-ticket"></i>
                                        <span>Coupons</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#fresh-fruits3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <img src="./Vegist - dashboard_files/image01.jpg" alt="menu-image">
                                        <span>Coupons</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu collapse" id="fresh-fruits3">
                                        <li class="submenu-li parant">
                                            <h6>Sections</h6>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#left-menu-b3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                                <span>Popular searches</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu-megamenu-link collapse" id="left-menu-b3">
                                                <li class="left-menu-link"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">All Meals</a></li>
                                                <li class="left-menu-link"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Add New Meals</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-link parent">
                                    <a href="javascript:void(0)" class="link-title">
                                        <i class="fa-solid fa-message"></i>
                                        <span>Messages</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#fresh-fruits3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                        <i class="fa-solid fa-message"></i>
                                        <span>Messages</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu collapse" id="fresh-fruits3">
                                        <li class="submenu-li parant">
                                            <h6>Sections</h6>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#left-menu-b3" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                                <span>Sections</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu-megamenu-link collapse" id="left-menu-b3">
                                                <li class="left-menu-link"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Show messages</a></li>
                                                <li class="left-menu-link"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Send Messages</a></li>
                                                <li class="left-menu-link"><a href="https://spacingtech.com/html/vegist-final/vegist/product-style-2.html">Chat</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="home-slider-2">
                        <div class="home-slider2 owl-carousel owl-theme owl-loaded owl-drag">



                            <div class="owl-stage-outer">
                                @yield('providers-containers')

                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--home page slider end-->



<!-- footer start -->
<section class="footer-one section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="f-logo">
                    <ul class="footer-ul">
                        <li class="footer-li footer-logo">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html">
                                <img class="img-fluid" src="./Vegist - dashboard_files/logo2.png" alt="">
                            </a>
                        </li>
                        <li class="footer-li footer-address">
                            <ul class="f-ul-li-ul">
                                <li class="footer-icon">
                                    <i class="ion-ios-location"></i>
                                </li>
                                <li class="footer-info">
                                    <h6>Location</h6>
                                    <span>401 Broadway 24th floor
</span>
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
                                    <h6>Get in touch</h6>
                                    <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                    <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li footer-contact">
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
                <div class="footer-bottom">
                    <div class="footer-link" id="footer-accordian">
                        <div class="f-link">
                            <h2 class="h-footer">Top categories</h2>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#t-cate" data-bs-toggle="collapse" class="h-footer">
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
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#services" data-bs-toggle="collapse" class="h-footer">
                                <span>Services</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/about-us.html">About vegist</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/faq&#39;s.html">Faq's</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/contact.html">Contact us</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-2-3-grid.html">News</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/sitemap.html">Sitemap</a></li>
                            </ul>
                        </div>
                        <div class="f-link">
                            <h2 class="h-footer">Privacy &amp; terms</h2>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#privacy" data-bs-toggle="collapse" class="h-footer">
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
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index2.html#account" data-bs-toggle="collapse" class="h-footer">
                                <span>My account</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/account.html">My account</a></li>
                                <li class="f-link-ul-li"><a href="https://spacingtech.com/html/vegist-final/vegist/cart-2.html">My cart</a></li>
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
<!-- copyright start -->
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
                        <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-2.html"><img src="./Vegist - dashboard_files/payment.png" class="img-fluid" alt="payment image"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- copyright end -->
<!-- newsletter pop-up start -->
<div class="vegist-popup animated modal fadeIn" id="myModal1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup-content">
                    <!-- popup close button start -->
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close" class="close-btn"><i class="ion-close-round"></i></a>
                    <!-- popup close button end -->
                    <!-- popup content area start -->
                    <div class="pop-up-newsletter" style="background-image: url(image/news-popup.jpg);">
                        <div class="logo-content">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html"><img src="./Vegist - dashboard_files/logo1.png" alt="image" class="img-fluid"></a>
                            <h4>Become a subscriber</h4>
                            <span>Subscribe to get the notification of latest posts</span>
                        </div>
                        <div class="subscribe-area">
                            <input type="text" name="comment" placeholder="Your email address">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index1.html" class="btn btn-style1">Subscribe</a>
                        </div>
                    </div>
                    <!-- popup content area end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter pop-up end -->
<!-- back to top start -->
<a href="javascript:void(0)" class="scroll" id="top">
    <span><i class="fa fa-angle-double-up"></i></span>
</a>
<!-- back to top end -->
<div class="mm-fullscreen-bg"></div>
<!-- jquery -->
<script src="./Vegist - dashboard_files/modernizr-2.8.3.min.js.download"></script>
<script src="./Vegist - dashboard_files/jquery-3.6.0.min.js.download"></script>
<!-- bootstrap -->
<script src="./Vegist - dashboard_files/bootstrap.min.js.download"></script>
<!-- popper -->
<script src="./Vegist - dashboard_files/popper.min.js.download"></script>
<!-- fontawesome -->
<script src="./Vegist - dashboard_files/fontawesome.min.js.download"></script>
<!-- owl carousal -->
<script src="./Vegist - dashboard_files/owl.carousel.min.js.download"></script>
<!-- swiper -->
<script src="./Vegist - dashboard_files/swiper.min.js.download"></script>
<!-- custom -->
<script src="./Vegist - dashboard_files/custom.js.download"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!--
<script>
    let input = document.getElementById("input_scr");
    let img = document.getElementById("img_scr");
    img.onclick = function (){
        input.click();
    }
</script>-->

<script src="{{asset('assets/js/branches.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>



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
@yield('meal-script')
@stack('scripts')
</body>
</html>
