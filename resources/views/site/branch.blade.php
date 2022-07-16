@extends('layouts.base-res')
@section('content')
<body class="" style="">


<!-- slider start -->
<section class="home8-slider">
    <div class="owl-carousel owl-theme home-slider-main owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5059px;">
                <div class="owl-item active" style="width: 1686.25px;">
                    <div class="item">
                        <div class="slider-image" style="background-image: url({{asset($branches->image)}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text">
                                            <span class="sub-title">Restaurant</span>
                                            <h1 class="title" style="color: white; width: 50%">
                                                <span>{{$branches->name}}</span>
                                                <span class="text">{{$branches->address}}</span>
                                            </h1>
                                            <a href="{{ url("/user/reservations/add-reservation/" . $branches->id ."/0") }}" class="slider-btn btn-style1">Reservasion <i class="fa-solid fa-user"></i></a>
                                            <a href="{{ url("/user/reservations/add-reservation/" . $branches->id ."/1") }}" class="slider-btn btn-style1">Reservasion <i class="fa-solid fa-users"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 1686.25px;"><div class="item">
                        <div class="slider-image" style="background-image: url({{--asset($rests->rest_img)--}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text">
                                            <span class="sub-title">Organic food break</span>
                                            <h1 class="title">
                                                <span>Provide the</span>
                                                <span class="text">best organic</span>
                                            </h1>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="slider-btn btn-style1">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 1686.25px;"><div class="item">
                        <div class="slider-image" style="background-image: url(image/home-8/silder-8a.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text">
                                            <span class="sub-title">Fresh organic food</span>
                                            <h1 class="title">
                                                <span>Eat healthy</span>
                                                <span class="text">stay healthy!</span>
                                            </h1>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="slider-btn btn-style1">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled">
                <i class="fa-solid fa-angles-left"></i></button><button type="button" role="presentation" class="owl-next">
                <i class="fa-solid fa-angles-right"></i>
            </button>
        </div>
        <div class="owl-dots disabled">

        </div>
    </div>
</section>

<!-- branch start -->
<section class="category-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="swiper-container category-slider swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(-2346.75px, 0px, 0px); transition-duration: 300ms;">
                        {{--@foreach($categories as $category)
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="{{asset($category -> images)}}" class="img-fluid" alt="image">
                                        <span class="item-count">08 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>{{$category -> name}}</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach--}}
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="./restuarantsss_files/cat14.jpg" class="img-fluid" alt="image">
                                        <span class="item-count">03 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>Fresh fruits</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="./restuarantsss_files/cat15.jpg" class="img-fluid" alt="image">
                                        <span class="item-count">07 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>Fresh meatt</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="./restuarantsss_files/cat16.jpg" class="img-fluid" alt="image">
                                        <span class="item-count">11 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>Organic juice</span></a>
                                </div>
                            </div>
                        </div>
{{--                            @foreach($categories as $category)
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="{{asset($category -> images)}}" class="img-fluid" alt="image" style="width: 200px; height: 200px;">
                                        <span class="item-count">08 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>{{$category -> name}}</span></a>
                                </div>
                            </div>
                        </div>
                            @endforeach--}}

                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>
</section>
<!-- branch end -->

<!-- service start -->
<section class="home-service">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Exquisite service</h2>
                </div>
                <div class="service-area-main">
                    <div class="service-area-1 service">
                        <ul class="service-ul">
                            <li class="service-li">
                                <div class="icon">
                                    <a href="javascript:void(0)">
                                                <span class="icon">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="text">
                                    <h4 class="title">Quality support</h4>
                                    <span class="sub-title">Alway online 24/7</span>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="icon">
                                    <a href="javascript:void(0)">
                                                <span class="icon">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="text">
                                    <h4 class="title">Delivary price</h4>
                                    <span class="sub-title">{{$branches -> delivery_price}} £E</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="service-area-1 service-img">
                        <img src="{{asset($branches->image)}}" class="img-fluid" alt="image">
                    </div>
                    <div class="service-area-2 service">
                        <ul class="service-ul">
                            <li class="service-li">
                                <div class="icon">
                                    <a href="javascript:void(0)">
                                                <span class="icon">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="text">
                                    <h4 class="title">Join newslleter</h4>
                                    <span class="sub-title">20% off by subscribing</span>
                                </div>
                            </li>
                            <li class="service-li">
                                <div class="icon">
                                    <a href="javascript:void(0)">
                                                <span class="icon">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="text">
                                    <h4 class="title">Return &amp; refund</h4>
                                    <span class="sub-title">Money back guarantee</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service end -->

<!-- product tab start -->
<section class="product-tab section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our products</h2>
                    <ul class="nav nav-tabs">
                      {{--  @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#home">{{$category->name}}</a>
                        </li>
                        @endforeach --}}
                    </ul>
                </div>
                <div class="tab-content pro-tab-slider">
                    <div class="tab-pane fade show active" id="home">
                        <div class="home8-tab-product swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="width: 1610px; transform: translate3d(0px, 0px, 0px);">
                                @foreach($meals as $meal)
                                <div class="swiper-slide swiper-slide-active" data-swiper-column="0" data-swiper-row="0" style="order: 0; width: 238.2px; margin-right: 30px;">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="{{asset($meal->image)}}" alt="pro-img1" class="img-fluid" style="width: 500px; height: 250px">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$meal->name}}</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">{{$meal->price}} £E</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="home8-tab-product swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-10.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-10a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh carrot natural free</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-11.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-11a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh apple (5kg)</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-12.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-12a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Blackberry 100%organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-1.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-1a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Organic coconet</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$117.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-2.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-2a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh seafoods</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price"><del>$590.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-3.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-3a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-20%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh green orange</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130.00 USD</span>
                                                <span class="old-price"><del>$150.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-4.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-4a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Healthy papaya 100% organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$117.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-5.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-5a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh blueberry</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$133.00 USD</span>
                                                <span class="old-price"><del>$145.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-6.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-6a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-21%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh avocado</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$139.00 USD</span>
                                                <span class="old-price"><del>$160.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-7.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-7a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh grassben</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price"><del>$590.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-8.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-8a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Vegetable tomato</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$93.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-9.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-9a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fruits banana 100% organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$167.00 USD</span>
                                                <span class="old-price"><del>$179.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <div class="tab-pane fade" id="contact">
                        <div class="home8-tab-product swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-3.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-3a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-20%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh green orange</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130.00 USD</span>
                                                <span class="old-price"><del>$150.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-4.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-4a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Healthy papaya 100% organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$117.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-5.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-5a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh blueberry</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$133.00 USD</span>
                                                <span class="old-price"><del>$145.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-6.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-6a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-21%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh avocado</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$139.00 USD</span>
                                                <span class="old-price"><del>$160.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-7.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-7a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh grassben</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price"><del>$590.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-8.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-8a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Vegetable tomato</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$93.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-9.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-9a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fruits banana 100% organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$167.00 USD</span>
                                                <span class="old-price"><del>$179.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-10.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-10a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh carrot natural free</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-11.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-11a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh apple (5kg)</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-12.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-12a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Blackberry 100%organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$230.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-1.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-1a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Organic coconet</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$117.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-2.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-2a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh seafoods</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price"><del>$590.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-3.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-3a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-20%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh green orange</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$130.00 USD</span>
                                                <span class="old-price"><del>$150.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-4.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-4a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Healthy papaya 100% organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$117.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-5.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-5a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh blueberry</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$133.00 USD</span>
                                                <span class="old-price"><del>$145.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-6.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-6a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-21%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh avocado</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$139.00 USD</span>
                                                <span class="old-price"><del>$160.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-7.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-7a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh grassben</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price"><del>$590.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-8.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-8a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Vegetable tomato</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$93.00 USD</span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="./restuarantsss_files/pro-9.jpg" alt="pro-img1" class="img-fluid">
                                                    <img src="./restuarantsss_files/pro-9a.jpg" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-12%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn cart"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fruits banana 100% organic</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star d-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$167.00 USD</span>
                                                <span class="old-price"><del>$179.00 USD</del></span>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="add-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->

<!-- home deal start -->
<section class="home-deal-area section-b-padding">
    <div class="deal-area-main">
        <div class="deal-banner banner-1">
            <img src="./restuarantsss_files/deal-banner-1.jpg" class="img-fluid" alt="image">
            <div class="text">
                <span class="sub-title">Fresh organic</span>
                <h1 class="title">Healthy foods</h1>
                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn-style1 deal-btn">Shop now</a>
            </div>
        </div>
        <div class="deal-counter">
            <ul class="contdown_row">
                <li class="countdown_section">
                    <span id="days" class="countdown_timer">769</span>
                    <span class="countdown_title">Day</span>
                </li>
                <li class="countdown_section">
                    <span id="hours" class="countdown_timer">17</span>
                    <span class="countdown_title">Hrs</span>
                </li>
                <li class="countdown_section">
                    <span id="minutes" class="countdown_timer">18</span>
                    <span class="countdown_title">Min</span>
                </li>
                <li class="countdown_section">
                    <span id="seconds" class="countdown_timer">21</span>
                    <span class="countdown_title">Sec</span>
                </li>
            </ul>
        </div>
        <div class="deal-banner banner-2">
            <img src="./restuarantsss_files/deal-banner-2.jpg" class="img-fluid" alt="image">
            <div class="video-btn">
                <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="banner-video"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- model video start -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </a>
                </div>
                <div class="modal-body">
                    <iframe src="./restuarantsss_files/0etCKCAsImI.html" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- model video end -->
</section>
<!-- home deal end -->

<!-- testimonial start -->
<section class="textimonial-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Purchasing power parity</h2>
                </div>
                <div class="test-area-main grid">
                    <ul class="testi-ul masonry-items work-gallery grid">
                        <li class="testi-li weight-lifting wow fadeInUp">
                            <div class="text-area">
                                        <span class="rating">
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                        </span>
                                <h4 class="title">For design quality</h4>
                                <p class="desc">I am very glad that I came across Vegist template. One of the best comprehensive ecommerce designs I have seen. I have been searching around for a while. Their support team has surprised me with prompt responses (100% of the time). I rate them 5 out of 5 for Design, Code quality, Prompt Response for any support request.</p>
                                <span class="testi-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                <span class="sub-title">By bijeesraj007</span>
                            </div>
                        </li>
                        <li class="testi-li weight-lifting wow fadeInUp">
                            <div class="text-area">
                                        <span class="rating">
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                        </span>
                                <h4 class="title">For customizability</h4>
                                <p class="desc">Great theme design, customer service, prices, and customizability! Highly recommended developer for shopify store themes and customization. Fast turn around, will definitely work with again!</p>
                                <span class="testi-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                <span class="sub-title">By nabumarket</span>
                            </div>
                        </li>
                        <li class="testi-li weight-lifting wow fadeInUp">
                            <div class="text-area">
                                        <span class="rating">
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                        </span>
                                <h4 class="title">For customer support</h4>
                                <p class="desc">There were some missing elements from the user's point of view, Hence we have reached to the developers and no dough about the fact these guys are superbly reliable and their quality of support is just phenomenal. You can definitely go ahead with this theme for your grocery shop, But any chance if you will face any difficulty these guys are backing up for support.</p>
                                <span class="testi-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                <span class="sub-title">By ajaykumarhsg</span>
                            </div>
                        </li>
                        <li class="testi-li weight-lifting wow fadeInUp">
                            <div class="text-area">
                                        <span class="rating">
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                        </span>
                                <h4 class="title">For customer support</h4>
                                <p class="desc">Great theme! and more than this If you need help with anything, these guys got your back. Really good support team! I would like to thank you spacingtech team for all the support and did everything so that I could solve my problems. Thanks! Keep up the great work. Honored 5 stars!</p>
                                <span class="testi-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                <span class="sub-title">By uixanurag</span>
                            </div>
                        </li>
                        <li class="testi-li weight-lifting wow fadeInUp">
                            <div class="text-area">
                                        <span class="rating">
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                        </span>
                                <h4 class="title">For customer support</h4>
                                <p class="desc">The design is AWESOME and site is very RESPONSIVE and USER FRENDLY. But the customer support was more than what i expected these guys fixed my issues where no shopify expert was able to do...Instant response from the developer and fixed issues and bugs within minutes even if it was out of the template support. Would recommend it highly the template to anyone and the devoloper.</p>
                                <span class="testi-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                <span class="sub-title">By eyeru</span>
                            </div>
                        </li>
                        <li class="testi-li weight-lifting wow fadeInUp">
                            <div class="text-area">
                                        <span class="rating">
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                            <i class="fa fa-star color-star"></i>
                                        </span>
                                <h4 class="title">For customer support</h4>
                                <p class="desc">We purchased this Theme for our webshop after trying another Theme unsuccessfully. We had few questions before buying the theme and they were promptly answered by the support. After purchasing the Theme all support request raised by us were answred within 24 hours and we are very happy with the support.</p>
                                <span class="testi-icon">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                <span class="sub-title">By indian-markt</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial end -->

<!-- Blog start -->
<section class="section-tb-padding home8-blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Recent news</h2>
                </div>
                <div class="blog-home8 owl-carousel owl-theme owl-loaded owl-drag">






                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2663px;"><div class="owl-item active" style="width: 423.673px; margin-right: 20px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./restuarantsss_files/blog-1.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Green onion knife and salad plased</a></h6>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 423.673px; margin-right: 20px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./restuarantsss_files/blog-2.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">All time fresh every time healthy</a></h6>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 423.673px; margin-right: 20px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./restuarantsss_files/blog-3.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Health and skin for your organic</a></h6>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 423.673px; margin-right: 20px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./restuarantsss_files/blog-4.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Health and skin for your organic</a></h6>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 423.673px; margin-right: 20px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./restuarantsss_files/blog-5.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Organic mix masala fresh &amp; soft</a></h6>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 423.673px; margin-right: 20px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./restuarantsss_files/blog-6.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Fresh organic brand and picnic</a></h6>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- Blog end -->

<!-- brand logo start -->
<section class="home-brand section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme brand-slider owl-loaded owl-drag">








                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-786px, 0px, 0px); transition: all 3s linear 0s; width: 2098px;"><div class="owl-item" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l1.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l2.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l3.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item active" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l4.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item active" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l5.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item active" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l6.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item active" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l7.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div><div class="owl-item active" style="width: 262.204px;"><div class="item">
                                    <a href="javascript:void(0)">
                                        <img src="./restuarantsss_files/l8.png" class="img-fluid" alt="image">
                                    </a>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- brand logo end -->

<!-- footer start -->
<section class="footer-8 section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="footer-ul">
                    <li class="footer-li footer-logo">
                        <div class="logo">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html">
                                <img src="{{asset($branches->image)}}" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="desc-area">
                            <span class="desc">Tortor neque egestas augue, eu vulputate magna eros eu erat.</span>
                        </div>
                        <div class="social">
                            <a href="https://www.facebook.com/">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://www.pinterest.com/">
                                <i class="fa fa-pinterest"></i>
                            </a>
                            <a href="https://www.youtube.com/">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </div>
                    </li>
                    <li class="footer-li footer-url">
                        <h2 class="title">Service</h2>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#title1" data-bs-toggle="collapse" class="mobile-title">Service</a>
                        <ul class="collapse menu-ul" id="title1">
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/about-us.html">About vegist</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/faq&#39;s.html">Faq's</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/contact.html">Contact us</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html">News</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/addresses.html">Store location</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-url">
                        <h2 class="title">Privacy &amp; terms</h2>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#title2" data-bs-toggle="collapse" class="mobile-title">Privacy &amp; terms</a>
                        <ul class="collapse menu-ul" id="title2">
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/payment-policy.html">Payment policy</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/privacy-policy.html">Privacy policy</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/return-policy.html">Return policy</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/shipping-policy.html">Shipping policy</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/terms-conditions.html">Terms &amp; conditions</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-url">
                        <h2 class="title">My account</h2>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#title3" data-bs-toggle="collapse" class="mobile-title">My account</a>
                        <ul class="collapse menu-ul" id="title3">
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/account.html">My account</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html">My cart</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/order-history.html">Order history</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html">My wishlist</a>
                            </li>
                            <li class="menu-li">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/addresses.html">My address</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-info">
                        <h2 class="title">Contact vegist</h2>
                        <div class="contact-area">
                            <div class="location">
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="textarea">
                                    <span class="text">Wooster parck chowk bazzar new york</span>
                                </div>
                            </div>
                            <div class="contact">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="textarea">
                                    <a href="tel:1-800-222-000">(+92) 0123 456 789</a>
                                    <a href="mailto:demo@demo.com">support@spacingtech.com</a>
                                </div>
                            </div>
                            <div class="payment">
                                <a href="javascript:void(0)">
                                    <img src="./restuarantsss_files/pay-image.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->

<!-- copyright start -->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div lang="col">
                <div class="copyright-area">
                    <span class="text">Copyright <i class="fa fa-copyright"></i> 2021 spacingtech rights reserved</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- copyright end -->






<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-2">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-3">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-4">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-5">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-6">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-7">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-8">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./restuarantsss_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">








                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-1"><img src="./restuarantsss_files/image1.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-2"><img src="./restuarantsss_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-3"><img src="./restuarantsss_files/image3.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-4"><img src="./restuarantsss_files/image4.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-5"><img src="./restuarantsss_files/image5.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-6"><img src="./restuarantsss_files/image6.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-7"><img src="./restuarantsss_files/image8.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#image-8"><img src="./restuarantsss_files/image7.jpg" class="img-fluid" alt="image"></a>
                                        </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
                    </div>
                    <div class="quick-caption">
                        <h4>Fresh organic reachter</h4>
                        <div class="quick-price">
                            <span class="new-price">$350.00 USD</span>
                            <span class="old-price"><del>$399.99 USD</del></span>
                        </div>
                        <div class="quick-rating">
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                        </div>
                        <div class="pro-size">
                            <label>Size: </label>
                            <select>
                                <option>1 ltr</option>
                                <option>3 ltr</option>
                                <option>5 ltr</option>
                            </select>
                        </div>
                        <div class="plus-minus">
                                    <span>
                                        <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                        <input type="text" name="name" value="1">
                                        <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                    </span>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- copyright end -->
<!-- back to top start -->
<a href="javascript:void(0)" class="scroll show" id="top">
    <span><i class="fa fa-angle-double-up"></i></span>
</a>
<!-- back to top end -->
<div class="mm-fullscreen-bg"></div>
<!-- jquery -->
<script src="./restuarantsss_files/modernizr-2.8.3.min.js.download"></script>
<script src="./restuarantsss_files/jquery-3.6.0.min.js.download"></script>
<script src="./restuarantsss_files/imagesloaded.pkgd.min.js.download"></script>
<script src="./restuarantsss_files/jquery.isotope.min.js.download"></script>
<!-- bootstrap -->
<script src="./restuarantsss_files/bootstrap.min.js.download"></script>
<!-- popper -->
<script src="./restuarantsss_files/popper.min.js.download"></script>
<!-- fontawesome -->
<script src="./restuarantsss_files/fontawesome.min.js.download"></script>
<!-- owl carousal -->
<script src="./restuarantsss_files/owl.carousel.min.js.download"></script>
<!-- swiper -->
<script src="./restuarantsss_files/swiper.min.js.download"></script>
<!-- custom -->
<script src="./restuarantsss_files/custom.js.download"></script>

</body></html>
@stop
