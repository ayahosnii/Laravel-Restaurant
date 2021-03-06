<section class="slider">
    <div class="home-slider owl-carousel owl-theme owl-loaded owl-drag">



        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-2698px, 0px, 0px); transition: all 0s ease 0s; width: 4047px;">
                <div class="owl-item" style="width: 1349px;">
                    <div class="items">
                        <div class="img-back" style="background-image:url({{asset('assets/img/sliders/slide4.jpg')}});">
                            <div class="h-s-content slide-c-l">
                                <span>Pizza</span>
                                <h1>Best Pizza Ever<br>&ampWith Cheese</h1>
                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="owl-item" style="width: 1349px;">
                    <div class="items">
                        <div class="img-back" style="background-image:url({{asset('assets/img/sliders/slider2.jpg')}});">
                            <div class="h-s-content slide-c-r">
                                <span>we have healthy meal too</span>
                                <h1>Try Prod of indian<br>100% pacaging</h1>
                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div></div>
                <div class="owl-item" style="width: 1349px;">
                    <div class="items">
                        <div class="img-back" style="background-image:url({{asset('assets/img/sliders/slider4.jpg')}});">
                            <div class="h-s-content slide-c-l">
                                <span>Cakes</span>
                                <h1>Cute Cake<br>With Cream</h1>
                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="owl-item active" style="width: 1349px;"><div class="items">
                        <div class="img-back" style="background-image:url({{asset('assets/img/sliders/slider3.jpg')}});">
                            <div class="h-s-content slide-c-c">
                                <span>Top selling!</span>
                                <h1>Fresh for your health</h1>
                                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div
        ><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-double-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-double-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
</section>
<!--home page slider start-->
<!--banner start-->
<!--
<section class="t-banner1 section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home-offer-banner">
                    <div class="o-t-banner">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/product.html" class="image-b">
                            <img class="img-fluid" src="{{asset('assets/img/banners/sub-banner-1.jpg')}}" alt="banner image">
                        </a>
                        <div class="o-t-content">
                            <h6></h6>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                    <div class="o-t-banner">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/product.html" class="image-b">
                            <img class="img-fluid" src="{{asset('assets/img/banners/banner-2.jpg')}}" alt="banner image">
                        </a>
                        <div class="o-t-content banner-color">
                            <h6>Vagetable eggplant 100% fresh food</h6>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html" class="btn btn-style1">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- banner end -->
<!-- Category image slide -->
<section class="category-img1 section-t-padding section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Shop by category</h2>
                </div>
                <div class="home-category owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1407px, 0px, 0px); transition: all 0.25s ease 0s; width: 4221px;">
                            @foreach($categories as $category)
                            <div class="owl-item cloned" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="h-cate">
                                        <div class="c-img">
                                            <a href="{{ route('product.category',['category_slug'=>  $category->slug]) }}" class="home-cate-img">
                                                <img class="img-fluid" src="{{asset($category->photo)}}" alt="cate-image" style="height: 90px; width: 90px">
                                                <span class="cat-title">{{$category->name}}</span>
                                            </a>
                                        </div>
                                        <span class="cat-num">19 Items</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                            <i class="fa fa-angle-left"></i>
                        </button><button type="button" role="presentation" class="owl-next">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="owl-dots disabled">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category image slide -->
<!-- Trending Products Start -->
<section class="h-t-products1 section-t-padding section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Trending products</h2>
                </div>
                <div class="trending-products owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3618px;">

                            @foreach($products as $product)
                            <div class="owl-item active" style="width: 271.5px; margin-right: 30px;">
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                <img class="img-fluid" style="width: 300px; height:300px;" src="{{asset($product->image)}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-img-01.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                {{$product->name}}</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">{{$product->regular_price}} LE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending Products end -->
<!-- Back-image and countdown star -->
<section class="home-countdown1">
    <div class="back-img" style="background-image: url({{asset('assets/img/dealbanner.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="deal-content">
                        <h2>Deal Of The Day!</h2>
                        <span class="deal-c">We offer a hot deal offer every festival</span>
                        <ul class="contdown_row">
                            <li class="countdown_section">
                                <span id="days" class="countdown_timer">114</span>
                                <span class="countdown_title">Days</span>
                            </li>
                            <li class="countdown_section">
                                <span id="hours" class="countdown_timer">18</span>
                                <span class="countdown_title">Hours</span>
                            </li>
                            <li class="countdown_section">
                                <span id="minutes" class="countdown_timer">43</span>
                                <span class="countdown_title">Minutes</span>
                            </li>
                            <li class="countdown_section">
                                <span id="seconds" class="countdown_timer">59</span>
                                <span class="countdown_title">Seconds</span>
                            </li>
                        </ul>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn btn-style1">Shop collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Back image and countdown end -->
<!-- Our Products Tab start -->
<section class="our-products-tab section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our products</h2>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="{{route('index')}}#home">SPECIAL PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="{{route('index')}}#new">NEW PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="{{route('index')}}#best">BESTSELLER</a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content pro-tab-slider">
                    <div class="tab-pane fade show active" id="home">
                        <div class="home-pro-tab swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="width: 1508px; transform: translate3d(-301.5px, 0px, 0px); transition-duration: 0ms;">

                                {{--Special Seller--}}
                                @for ($i = 0; $i < 1; $i++)
                                    @for ($x = 0; $x < 6; $x++)

                                @foreach($products as $product)
                                <div class="swiper-slide" data-swiper-column="{{$x}}" data-swiper-row="{{$i}}" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="{{$product->image}}" style="height: 300px; width: 500px" alt="pro-img1" class="img-fluid">
                                                    <img src="{{$product->image}}" style="height: 300px; width: 500px" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">Best</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$product->name}}</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">{{$product->sale_price}} LE</span>
                                                <span class="old-price"><del>${{$product->regular_price}} LE</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                    @endfor
                                @endfor
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-buttons">
                            <div class="content-buttons">
                                <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>

                    {{--New Product--}}
                    <div class="tab-pane fade" id="new">
                        <div class="home-pro-tab swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="transition-duration: 300ms;">
                                @foreach($lproducts as $lproduct)
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img style="height: 300px; width: 500px" src="{{$lproduct->image}}" alt="{{$lproduct->name}}" class="img-fluid">
                                                    <img src="{{$lproduct->image}}" style="height: 300px; width: 500px" alt="{{$lproduct->image}}" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-discount">-10%</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$lproduct->name}} ({{$lproduct->quantity}}km)</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">{{$lproduct->sale_price}} LE</span>
                                                <span class="old-price"><del>{{$lproduct->regular_price}} LE</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-buttons">
                            <div class="content-buttons">
                                <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>

                    {{--Best PRODUCTS--}}
                    <div class="tab-pane fade" id="best">
                        <div class="home-pro-tab swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="transition-duration: 300ms;">
                                @foreach($sproducts as $sproduct)
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="{{$sproduct->image}}" style="height: 300px; width: 500px" alt="pro-img1" class="img-fluid">
                                                    <img src="{{$sproduct->image}}" style="height: 300px; width: 500px" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$sproduct->name}} ({{$sproduct->quantity}}Kg)</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star b-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">{{$sproduct->sale_price}} LE</span>
                                                <span class="old-price"><del>{{$sproduct->regular_price}} LE</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-buttons">
                            <div class="content-buttons">
                                <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Products Tab end -->
<!-- Testimonial Start -->
<section class="section-tb-padding testimonial-bg1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our customer say</h2>
                </div>
                <div class="testi-m owl-carousel owl-theme owl-loaded owl-drag">



                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-603px, 0px, 0px); transition: all 0.25s ease 0s; width: 1809px;"><div class="owl-item" style="width: 573px; margin-right: 30px;"><div class="items">
                                    <div class="testimonial-area">
                                        <span class="tsti-title">Frendly support</span>
                                        <p>I love your store! there is the largest selection of products of the exceptional quality and the lowest prices like in no other store.</p>
                                        <div class="testi-name">
                                            <h6>Williamson</h6>
                                            <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 573px; margin-right: 30px;"><div class="items">
                                    <div class="testimonial-area">
                                        <span class="tsti-title">Frendly support</span>
                                        <p>I love your store! there is the largest selection of products of the exceptional quality and the lowest prices like in no other store.</p>
                                        <div class="testi-name">
                                            <h6>Jessica joy</h6>
                                            <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 573px; margin-right: 30px;"><div class="items">
                                    <div class="testimonial-area">
                                        <span class="tsti-title">Frendly support</span>
                                        <p>I love your store! there is the largest selection of products of the exceptional quality and the lowest prices like in no other store.</p>
                                        <div class="testi-name">
                                            <h6>Jane deo</h6>
                                            <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                            <i class="fa fa-angle-left"></i></button>
                        <button type="button" role="presentation" class="owl-next">
                            <i class="fa fa-angle-right"></i></button>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial end -->
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
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-2">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-3">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-4">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-5">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-6">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-7">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-8">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">








                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-1"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image1.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-2"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-3"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image3.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-4"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image4.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-5"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image5.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-6"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image6.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-7"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image8.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index1.html#image-8"><img src="./Vegist - Multipurpose eCommerce HTML Template_files/image7.jpg" class="img-fluid" alt="image"></a>
                                        </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">???</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">???</span></button></div><div class="owl-dots disabled"></div></ul>
                    </div>
                    <div class="quick-caption">
                        <h4>Fresh organic reachter</h4>
                        <div class="quick-price">
                            <span class="new-price">350.00 LE</span>
                            <span class="old-price"><del>399.99 LE</del></span>
                        </div>
                        <div class="quick-rating">
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-description">
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
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
<!-- quick veiw end -->
<!-- Blog start -->
<section class="section-tb-padding blog1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Recent news</h2>
                </div>
                <div class="home-blog owl-carousel owl-theme owl-loaded owl-drag">







                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2814px;"><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-1.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Green onion knife and salad plased</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">6 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-2.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">All time fresh every time healthy</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">1 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-3.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Health and skin for your organic</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">1 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-4.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Health and skin for your organic</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">0 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-5.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Organic mix masala fresh &amp; soft</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">0 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-6.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Fresh organic brand and picnic</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">0 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="./Vegist - Multipurpose eCommerce HTML Template_files/blog-7.jpg" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">Vegist special liquide fresh vegetable</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>
                                            </div>
                                            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html" class="read-link">
                                                <span>Read more</span>
                                                <i class="ti-arrow-right"></i>
                                            </a>
                                            <div class="blog-date-comment">
                                                <span class="blog-date">8 Jan 2021</span>
                                                <a href="javascript:void(0)">0 Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">???</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">???</span></button></div><div class="owl-dots disabled"></div></div>
                <div class="all-blog">
                    <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-3-grid.html" class="btn btn-style1">View all</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog end -->
<!-- News Letter start -->
<section class="news-letter1">
    <div class="section-tb-padding news-img" style="background-image: url({{asset('assets/img/banner3.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-news">
                        <h2>Get the latest deals</h2>
                        <p>And receive 20% off coupon for first shopping</p>
                        <form>
                            <input type="text" name="search" placeholder="Enter your email address">
                            <button class="btn btn-style3">Subscribe</button>
                            <button class="btn btn-style1 news-sub">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Letter end -->
<!-- brand logo start -->
<section class="section-tb-padding home-brand1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brand-carousel owl-carousel owl theme owl-loaded owl-drag">








                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-201px, 0px, 0px); transition: all 3s linear 0s; width: 1608px;"><div class="owl-item" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l1.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l2.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l3.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l4.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l5.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l6.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l7.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div><div class="owl-item" style="width: 171px; margin-right: 30px;"><div class="items">
                                    <div class="brand-img">
                                        <a href="javascript:void(0)">
                                            <img src="./Vegist - Multipurpose eCommerce HTML Template_files/l8.png" alt="home brand" class="img-fluid">
                                        </a>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">???</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">???</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>


