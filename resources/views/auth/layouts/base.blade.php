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
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Vegist - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories">
    <meta name="author" content="spacingtech_webify">
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

    </style>
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
                                                <input type="text" name="search" placeholder="Search products, brands or advice">
                                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
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
                            <a href="#">
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
                                    <a href="tel: 0100-621-5138">Phone:  0100-621-5138</a>
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
                        <a href="{{route('checkout')}}"><img src="{{asset('assets/img/c-icon1.png')}}payment.png" class="img-fluid" alt="payment image"></a>
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
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
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
<script src="{{asset('assets/js/register-scripts.js')}}"></script>

@livewireScripts()
</body>
</html>
