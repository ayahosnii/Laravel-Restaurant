@extends('layouts.base-vue')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="#" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="#" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About {{$rests->name}}</span>
                            <h2>Cakes and bakes from the house of Queens!</h2>
                        </div>
                        <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                            Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                    </div>
                </div>
                {{--          <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Cake design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Class</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Recipes</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($categories as $category)
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-029-cupcake-3"></span>
                            <h5>{{$category->name}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->



    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                @foreach ($mealItems as $meal)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset($meal->image)}}" style="background-image: url({{asset($meal->image)}})">
                            <div class="product__label">
                                <span>{{$meal->category->name}}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{$meal->name}}</a></h6>
                            <div class="product__item__price">{{$meal->price}}LE</div>
                            <div class="cart_add">
                                <a href="#" class="add-to-cart" data-meal-id="{{ $meal->id }}" data-meal-name="{{ $meal->name }}" data-meal-price="{{ $meal->price }}">
                                    Add to Cart
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Specialties</span>
                    <h2 class="mb-4">Our Menu</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($meals as $categoryName => $categoryMeals)
                <div class="col-md-6 col-lg-4">
                    <div class="menu-wrap">
                        <div class="heading-menu text-center ftco-animate">
                            <h3>{{ $categoryName }}</h3>
                        </div>
                        @foreach ($categoryMeals as $index => $meal)
                        <div class="menus {{ $index == count($categoryMeals) - 1 ? ' border-bottom-0' : '' }} d-flex ftco-animate">
                            <div class="menu-img img" style="background-image: url({{$meal->image}});"></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3>{{$meal->meal_name}}</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price">{{$meal->price}} LE</span>
                                    </div>
                                </div>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                        </div>
                            @endforeach
                        <span class="flat flaticon-pizza" style="left: 0;"></span>
                        <span class="flat flaticon-chicken" style="right: 0;"></span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section>


    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our team</span>
                        <h2>Sweet Baker </h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Join Us</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <span>Decorater</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    <section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <form action="#" class="appointment-form">
                        <h3 class="mb-3">Book your Table</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control book_date" placeholder="Check-In">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input type="text" class="form-control book_time" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Guest</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our client say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @sweetcake</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="map__inner">
                        <h6>COlorado</h6>
                        <ul>
                            <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li>
                            <li>Sweetcake@support.com</li>
                            <li>+1 800-786-1000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="map__iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="copyright__widget">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
@endsection
@section('scripts')
    <script>
        console.log('works')
        $(document).ready(function() {
            $('.add-to-cart').click(function(event) {
                event.preventDefault();
                var mealId = $(this).data('meal-id');
                var mealName = $(this).data('meal-name');
                var mealPrice = $(this).data('meal-price');

                $.ajax({
                    type: 'POST',
                    url: '/add-to-cart',
                    data: {
                        meal_id: mealId,
                        meal_name: mealName,
                        meal_price: mealPrice
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            alert('Item added to cart');
                        } else {
                            alert('An error occurred');
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        alert('An error occurred');
                    }
                });
            });
        });

    </script>
@stop

{{--
@extends('layouts.base-res')
@section('content')
<body class="" style="">


<!-- slider start -->
<section class="home8-slider">
    <div class="owl-carousel owl-theme home-slider-main owl-loaded owl-drag">



        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5059px;">
                <div class="owl-item active" style="width: 1686.25px;">
                    <div class="item">
                        <div class="slider-image" style="background-image: url({{asset($rests->rest_img)}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="slider-text">
                                            <span class="sub-title">Restaurant</span>
                                            <h1 class="title" style="color: white">
                                                <span>{{$rests->name}}</span>
                                                <span class="text">{{$rests->address}}</span>
                                            </h1>
                                            @if(isset($branches))
                                            @foreach($branches as $branch)
                                                <div class="branch" style="display: inline; width: 30%; margin: 10px">
                                                    <a href="{{route('branch.details', $branch->b_username)}}" class="slider-btn btn-style1">{{$branch -> name}}</a>
                                                </div>
                                            @endforeach
                                            @else
                                                <div class="branch" style="display: inline; width: 30%; margin: 10px">
                                                    <a href="" class="slider-btn btn-style1">Reservation</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 1686.25px;"><div class="item">
                        <div class="slider-image" style="background-image: url({{asset($rests->rest_img)}});">
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
                        @foreach($categories as $category)
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="{{asset($category -> images)}}" class="img-fluid" alt="image" style="height: 100px">
                                        <span class="item-count">08 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>{{$category -> name}}</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                            @foreach($categories as $category)
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 305.25px; margin-right: 30px;">
                            <div class="category-area">
                                <div class="cat-image">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="cat-url">
                                        <img src="{{asset($category -> images)}}" class="img-fluid" alt="image" style="height: 100%">
                                        <span class="item-count">08 items</span>
                                    </a>
                                </div>
                                <div class="cat-title">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="title"><span>{{$category -> name}}</span></a>
                                </div>
                            </div>
                        </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>
</section>
<!-- branch end -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Our Menu
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($mealCategories as $meal)
                <div class="col-lg-2 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5"></h3>
                    </div>

                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{asset('assets/restaurant/img/breakfast-1.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{$meal->name}}</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">{{$meal->price}} LE</h4>
                                </div>
                            </div>
                            <p>category: {{substr($meal->category_name, 0, 13)}}</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{asset('assets/restaurant/img/breakfast-1.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="{{asset('assets/restaurant/img/breakfast-1.jpg')}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- product tab start -->
<section class="product-tab section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our products</h2>
                    <ul class="nav nav-tabs">
                        @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/index8.html#home">{{$category->name}}</a>
                        </li>
                        @endforeach
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
--}}
{{--<section class="home-deal-area section-b-padding">--}}{{--

--}}
{{--    <div class="deal-area-main">--}}{{--

--}}
{{--        <div class="deal-banner banner-1">--}}{{--

--}}
{{--            <img src="./restuarantsss_files/deal-banner-1.jpg" class="img-fluid" alt="image">--}}{{--

--}}
{{--            <div class="text">--}}{{--

--}}
{{--                <span class="sub-title">Fresh organic</span>--}}{{--

--}}
{{--                <h1 class="title">Healthy foods</h1>--}}{{--

--}}
{{--                <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="btn-style1 deal-btn">Shop now</a>--}}{{--

--}}
{{--            </div>--}}{{--

--}}
{{--        </div>--}}{{--

--}}
{{--        <div class="deal-counter">--}}{{--

--}}
{{--            <ul class="contdown_row">--}}{{--

--}}
{{--                <li class="countdown_section">--}}{{--

--}}
{{--                    <span id="days" class="countdown_timer">769</span>--}}{{--

--}}
{{--                    <span class="countdown_title">Day</span>--}}{{--

--}}
{{--                </li>--}}{{--

--}}
{{--                <li class="countdown_section">--}}{{--

--}}
{{--                    <span id="hours" class="countdown_timer">17</span>--}}{{--

--}}
{{--                    <span class="countdown_title">Hrs</span>--}}{{--

--}}
{{--                </li>--}}{{--

--}}
{{--                <li class="countdown_section">--}}{{--

--}}
{{--                    <span id="minutes" class="countdown_timer">18</span>--}}{{--

--}}
{{--                    <span class="countdown_title">Min</span>--}}{{--

--}}
{{--                </li>--}}{{--

--}}
{{--                <li class="countdown_section">--}}{{--

--}}
{{--                    <span id="seconds" class="countdown_timer">21</span>--}}{{--

--}}
{{--                    <span class="countdown_title">Sec</span>--}}{{--

--}}
{{--                </li>--}}{{--

--}}
{{--            </ul>--}}{{--

--}}
{{--        </div>--}}{{--

--}}
{{--        <div class="deal-banner banner-2">--}}{{--

--}}
{{--            <img src="./restuarantsss_files/deal-banner-2.jpg" class="img-fluid" alt="image">--}}{{--

--}}
{{--            <div class="video-btn">--}}{{--

--}}
{{--                <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="banner-video"><i class="fa fa-play"></i></a>--}}{{--

--}}
{{--            </div>--}}{{--

--}}
{{--        </div>--}}{{--

--}}
{{--    </div>--}}{{--

--}}
{{--    <!-- model video start -->--}}{{--

--}}
{{--    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">--}}{{--

--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}{{--

--}}
{{--            <div class="modal-content">--}}{{--

--}}
{{--                <div class="modal-header">--}}{{--

--}}
{{--                    <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html#" class="close" data-bs-dismiss="modal" aria-label="Close">--}}{{--

--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}{{--

--}}
{{--                    </a>--}}{{--

--}}
{{--                </div>--}}{{--

--}}
{{--                <div class="modal-body">--}}{{--

--}}
{{--                    <iframe src="./restuarantsss_files/0etCKCAsImI.html" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>--}}{{--

--}}
{{--                </div>--}}{{--

--}}
{{--            </div>--}}{{--

--}}
{{--        </div>--}}{{--

--}}
{{--    </div>--}}{{--

--}}
{{--    <!-- model video end -->--}}{{--

--}}
{{--</section>--}}{{--

<!-- home deal end -->



<!-- Offers start -->
<section class="section-tb-padding home8-blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Offers</h2>
                </div>
                <div class="blog-home8 owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2663px;">
                            <div class="owl-item active" style="width: 423.673px; margin-right: 20px;">
                                <div class="items">
                                    <div class="blog-start">
                                        <div class="blog-image">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-1-details.html">
                                                <img src="{{asset('assets/img/banners/offers/offer.webp')}}" alt="blog-image" class="img-fluid">
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

<!-- footer start -->
<section class="footer-8 section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="footer-ul">
                    <li class="footer-li footer-logo">
                        <div class="logo">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/index8.html">
                                <img src="{{asset($rests->images)}}" alt="logo-image" class="img-fluid">
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
--}}
