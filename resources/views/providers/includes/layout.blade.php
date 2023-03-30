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
    <title>Vegist - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries.">
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories">
    <meta name="author" content="spacingtech_webify">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="https://spacingtech.com/html/vegist-final/vegist/image/fevicon.png">



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
    <link rel="shortcut icon" type="image/favicon" href="https://spacingtech.com/html/vegist-final/vegist/image/fevicon.png">
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
<body class="" style="">




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
</body>
</html>
