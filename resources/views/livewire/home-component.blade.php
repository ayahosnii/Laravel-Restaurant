<div>
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
                                <a href="{{route('restaurant.index')}}" class="btn btn-style1">Shop now</a>
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
                                <a href="{{route('restaurant.index')}}" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div></div>
                <div class="owl-item" style="width: 1349px;">
                    <div class="items">
                        <div class="img-back" style="background-image:url({{asset('assets/img/sliders/slider4.jpg')}});">
                            <div class="h-s-content slide-c-l">
                                <span>Cakes</span>
                                <h1>Cute Cake<br>With Cream</h1>
                                <a href="{{route('restaurant.index')}}" class="btn btn-style1">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="owl-item active" style="width: 1349px;"><div class="items">
                        <div class="img-back" style="background-image:url({{asset('assets/img/sliders/slider3.jpg')}});">
                            <div class="h-s-content slide-c-c">
                                <span>Top selling!</span>
                                <h1>Fresh for your health</h1>
                                <a href="{{route('restaurant.index')}}" class="btn btn-style1">Shop now</a>
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
                                            <a href="{{ route('main-category.index',['main_category_slug'=>  $category->slug]) }}" class="home-cate-img">
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

                            @foreach($meals as $meal)
                            <div class="owl-item active" style="width: 271.5px; margin-right: 30px;">
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                <img class="img-fluid" style="width: 300px; height:300px;" src="{{asset($meal->image)}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-img-01.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$meal->id}}"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                {{$meal->name}}</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        @if($meal->sales && $meal->sales->count() > 0)
                                            <div class="pro-price">
                                                <span class="new-price">{{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }} LE</span>
                                                <span class="old-price"><del>{{$meal->price}} LEE</del></span>
                                            </div>
                                        @else
                                            <div class="pro-price">
                                                <span class="new-price">{{ number_format($meal->price, 2) }} LE</span>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            @endforeach

                           <div class="owl-nav">
                               <button type="button" role="presentation" class="owl-prev">
                                   <i class="fa fa-angle-left"></i>
                               </button>
                               <button type="button" role="presentation" class="owl-next">
                                   <i class="fa fa-angle-right"></i></button></div>
                                <div class="owl-dots disabled">

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending Products end -->
<!-- Back-image and countdown star -->
<section class="home-countdown1">
    <div class="back-img" style="background-image: url({{asset('assets/img/banner-sale.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="deal-content">
                        @if($sale && $ends_at > \Carbon\Carbon::now())
                        <h2>{{$sale->name}}</h2>
                        <span class="deal-c" style="color: #0a001f">We offer a hot deal offer every festival</span>
                        <ul class="contdown_row">
                            <li class="countdown_section">
                                <span id="days" class="countdown_timer" wire:key="days">{{ $days }}</span>
                                <span class="countdown_title">Days</span>
                            </li>
                            <li class="countdown_section">
                                <span id="hours" class="countdown_timer" wire:key="hours">{{ $hours }}</span>
                                <span class="countdown_title">Hours</span>
                            </li>
                            <li class="countdown_section">
                                <span id="minutes" class="countdown_timer" wire:key="minutes">{{ $minutes }}</span>
                                <span class="countdown_title">Minutes</span>
                            </li>
                            <li class="countdown_section">
                                <span id="seconds" class="countdown_timer" wire:key="seconds">{{ $seconds }}</span>
                                <span class="countdown_title">Seconds</span>
                            </li>
                        </ul>
                        <a href="{{ route('restaurant.index') }}" class="btn btn-style1">Shop collection</a>
                        @else
                            <h2>Wait for new sale soon</h2>
                        @endif
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
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="{{route('bestseller')}}#best">BESTSELLER</a>
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

                                @foreach($meals as $meal)
                                <div class="swiper-slide" data-swiper-column="{{$x}}" data-swiper-row="{{$i}}" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img src="{{$meal->image}}" style="height: 300px; width: 500px" alt="pro-img1" class="img-fluid">
                                                    <img src="{{$meal->image}}" style="height: 300px; width: 500px" alt="additional image" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">Best</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$meal->id}}"><i class="fa fa-eye"></i></a>
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
                                            @if($meal->sales && $meal->sales->count() > 0)
                                                <div class="pro-price">
                                                    <span class="new-price">{{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }} LE</span>
                                                    <span class="old-price"><del>{{$meal->price}} LEE</del></span>
                                                </div>
                                            @else
                                                <div class="pro-price">
                                                    <span class="new-price">{{ number_format($meal->price, 2) }} LE</span>
                                                </div>
                                            @endif

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
                                @foreach($lmeals as $lmeal)
                                <div class="swiper-slide" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img style="height: 300px; width: 500px" src="{{$lmeal->image}}" alt="{{$lmeal->name}}" class="img-fluid">
                                                    <img src="{{$lmeal->image}}" style="height: 300px; width: 500px" alt="{{$lmeal->image}}" class="img-fluid additional-image">
                                                </a>
                                            </div>
                                            @if($lmeal->sales->first()?->percentage > 0)
                                                <div class="Pro-lable">
                                                    <span class="p-discount">%{{number_format($lmeal->sales->first()->percentage)}}</span>
                                                </div>
                                            @endif
                                            <div class="pro-icn">
                                                <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $meal->id}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$lmeal->name}} ({{$lmeal->quantity}}km)</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                                <div class="Pro-lable">
                                                    @if($lmeal->sales->first() && $lmeal->sales->first()->percentage > 0)
                                                    <span class="p-discount">%{{number_format($lmeal->sales->first()->percentage)}}</span>
                                                        <span class="old-price"><del>{{$lmeal->price}} LE</del></span>
                                                    @else
                                                        <span class="old-price"><del>{{$lmeal->price}} LE</del></span>
                                                    @endif
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
                                @foreach($smeals as $smeal)
                                    <div class="swiper-slide" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                        <img src="{{$smeal->image}}" style="height: 300px; width: 500px" alt="pro-img1" class="img-fluid">
                                                        <img src="{{$smeal->image}}" style="height: 300px; width: 500px" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $meal->id}}"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$smeal->name}} ({{$smeal->quantity}}Kg)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    @isset($smeal->sales->first()->percentage)
                                                    <span class="new-price">{{ number_format($smeal->price * (100 - $smeal->sales->first()->percentage) / 100, 2) }} LE</span>
                                                    <span class="old-price"><del>{{$smeal->price}} LE</del></span>
                                                    @else
                                                        <span class="old-price">{{$smeal->price}} LE</span>
                                                    @endisset
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
    @foreach($meals as $meal)
        <section class="quick-view">
            <div class="modal fade" id="exampleModal{{ $meal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <img src="{{$meal->image}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">








                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-1"><img src="./products_files/image1.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-2"><img src="./products_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-3"><img src="./products_files/image3.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-4"><img src="./products_files/image4.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-5"><img src="./products_files/image5.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-6"><img src="./products_files/image6.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-7"><img src="./products_files/image8.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-8"><img src="./products_files/image7.jpg" class="img-fluid" alt="image"></a>
                                                </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
                            </div>
                            <div class="quick-caption">
                                <h4>{{$meal->name}}</h4>
                                <div class="quick-price">
                                    @if ($meal->sales->isNotEmpty())
                                        <span class="new-price">
                                        {{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }} LE</span>
                                        <span class="old-price">
                                        <strike>£{{ number_format($meal->price, 2) }}</strike>
                                    </span>
                                    @else
                                        <span class="new-price">
                                        {{ number_format($meal->price, 2) }}
                                        </span>
                                    @endif
                                </div>
                                <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-description">
                                    <p>{{$meal->description}}</p>
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
                                    <a href=#" class="quick-cart" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="#" class="quick-wishlist" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endforeach
<!-- Blog start -->
<section class="section-tb-padding blog1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Recent blogs</h2>
                </div>
                <div class="home-blog owl-carousel owl-theme owl-loaded owl-drag">







                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2814px;">
                            @foreach($posts as $post)
                            <div class="owl-item active" style="width: 372px; margin-right: 30px;">
                                <div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="">
                                                <img src="{{$post->image}}" alt="blog-image" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a href="{{url('/post/'.$post->slug)}}">{{$post->title}}</a></h6>
                                                <span class="blog-admin">By <span class="blog-editor">{{$post->user->name}}</span></span>
                                            </div>
                                            <p class="blog-description">{{substr($post->body, 300)}}...</p>
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
                                </div>
                            </div>
                            @endforeach
                               <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                <div class="all-blog">
                    <a href="{{url('/post/')}}" class="btn btn-style1">View all</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="news-letter1">
    <div class="section-tb-padding news-img" style="background-image: url({{asset('assets/img/banner3.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-news">
                        <h2>Get the latest deals</h2>
                        <p>And receive 10% off coupon for first shopping</p>
                        <form wire:submit:prevent>
                            <input type="text" wire:model="email" placeholder="Enter your email address">
                            <button type="submit" wire:click.prevent="subscribe" class="btn btn-style3" wire:loading.class="opacity-50" wire:loading.attr="disabled">
                                <span wire:loading.remove>Subscribe</span>
                                <span wire:loading>Subscribing...</span>
                            </button>
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
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>



</div>
