@extends('layouts.base-vue')
@section('content')
<section class="about-breadcrumb">
    <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home"><a href="/">Home</a></li>
                            <li class="about-p"><span>{{--$category_name->name--}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-tb-padding pro-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12 pro-image">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 larg-image">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="image-11">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image.jpg)">
                                        <img src="./details-Vegist_files/pro-page-image.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="image-22">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/prro-page-image01.jpg)">
                                        <img src="./details-Vegist_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="image-33">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image1-1.jpg)">
                                        <img src="./details-Vegist_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade active show" id="image-44">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{$product->image}})">
                                        <img src="{{$product->image}}" style="height: 460px;" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="image-55">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image2.jpg)">
                                        <img src="./details-Vegist_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="image-66">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image2-2.jpg)">
                                        <img src="./details-Vegist_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="image-77">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image3.jpg)">
                                        <img src="./details-Vegist_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="image-88">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(image/pro-page-image/pro-page-image03.jpg)">
                                        <img src="./details-Vegist_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme owl-loaded owl-drag">








                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-441px, 0px, 0px); transition: all 0s ease 0s; width: 1764px;"><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-55"><img src="./details-Vegist_files/image5.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-66"><img src="./details-Vegist_files/image6.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-77"><img src="./details-Vegist_files/image8.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-88"><img src="./details-Vegist_files/image7.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item active" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-11"><img src="./details-Vegist_files/image1.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item active" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-22"><img src="./details-Vegist_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                        </li></div><div class="owl-item active" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-33"><img src="./details-Vegist_files/image3.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item active" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-44"><img src="./details-Vegist_files/image4.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-55"><img src="./details-Vegist_files/image5.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-66"><img src="./details-Vegist_files/image6.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-77"><img src="./details-Vegist_files/image8.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-88"><img src="./details-Vegist_files/image7.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-11"><img src="./details-Vegist_files/image1.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-22"><img src="./details-Vegist_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-33"><img src="./details-Vegist_files/image3.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item cloned" style="width: 95.25px; margin-right: 15px;"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-44"><img src="./details-Vegist_files/image4.jpg" class="img-fluid" alt="image"></a>
                                        </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 pro-info">
                        <h4>{{$product->name}}</h4>
                        <div class="rating">
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-availabale">
                            <span class="available">Availability:</span>
                            <span class="pro-instock"> @if($product->stock_status ==  1)In Stock @else Out Stock @endif</span>
                        </div>
                        <div class="pro-price">
<!--
                            <td><input type="text" name="price[]" class="form-control price"></td>
-->
                            <span class="new-price">{{$product->sale_price}} £</span>
                            <span class="old-price"><del>{{$product->regular_price}} £</del></span>
                            <div class="Pro-lable">
                                <span class="p-discount">-8%</span>
                            </div>
                        </div>
                        <span class="pro-details">Hurry up! only <span class="pro-number">{{$product->quantity}}</span> products left in stock!</span>
                        <p>{{$product->description}}</p>
                        <div class="pro-items">
                            @if(isset($product_attributes) && count($product_attributes) > 0 )
                                @foreach($product_attributes as $attribute)
                                    <span class="pro-size">{{$attribute -> name}}:</span>
                                    @foreach($attribute -> options as $option)
                                    <ul class="pro-wight">
                                <li><a id="{{$option -> id}}" onclick="classList.toggle('active')" class="option">{{$option -> name}}</a></li>
                            </ul>
                                    @endforeach
                                @endforeach
                            @endif
                        </div>
                        <div class="product-color">
                            <span class="color-label">Color:</span>
                            <span class="color">
                                        <a href="javascript:void(0)" class="active"><span></span></a>
                                        <a href="javascript:void(0)"><span></span></a>
                                        <a href="javascript:void(0)"><span></span></a>
                                    </span>
                        </div>
                        <div class="pro-qty">
                            <span class="qty">Quantity:</span>
                            <div class="plus-minus">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <input type="text" name="name" value="1">
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                            </div>
                        </div>


                        <div class="pro-btn">
                            <a id="addToWishlist" class="addToWishlist w-c-q-icn wishlistProd_22 btn btn-style1" data-product-id="{{$product -> id}}"><i class="fa fa-heart"></i></a>
                            <a href="#" class="btn btn-style1" wire:click.prevent="store('{{ $product->id}}', '{{$product->name}}', '{{ $product->regular_price }}')"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-1.html" class="btn btn-style1">Buy now</a>
                        </div>

                        <div class="share">
                            <span class="share-lable">Share:</span>
                            <ul class="share-icn">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="pay-img">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-1.html">
                                <img src="./details-Vegist_files/pay-image.jpg" class="img-fluid" alt="pay-image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="ti-truck"></i></span>
                        <h4>Delivery info</h4>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="ti-reload"></i></span>
                        <h4>30 days returns</h4>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                </div>
                <div class="product-service">
                    <div class="icon-title">
                        <span><i class="ti-id-badge"></i></span>
                        <h4>10 year warranty</h4>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product info end -->
<!-- product page tab start -->
<section class="section-b-padding pro-page-content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="pro-page-tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#tab-1">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#tab-2">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Calories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#tab-5">Size chart</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1">
                            <div class="tab-1content">
                                <h4>More details</h4>
                                <ul class="tab-description">
                                    {{$product->description}}
                                </ul>
                            </div>
                            <div class="tab-2content">
                                <h4>Key specification</h4>
                                <ul class="tab-description">
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                    <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.</li>
                                    <li>type here your detail one by one li more add</li>
                                    <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-2">
                            <h4 class="reviews-title">Customer reviews</h4>
                            <div class="customer-reviews t-desk-2">
                                        <span class="p-rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                <p class="review-desck">Based on 2 reviews</p>
                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html#add-review" data-bs-toggle="collapse">Write a review</a>
                            </div>
                            <div class="review-form collapse" id="add-review">
                                @if(!Auth::check())
                                <h4>Please <a href="{{route('login')}}">Login</a></h4>
                                @else
                                <h4>Write a review</h4>
                                <form>
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Enter your name" value="{{Auth::user()->name}}" hidden>
                                    <label>Email</label>
                                    <input type="text" name="mail" placeholder="Enter your Email" value="{{Auth::user()->email}}">
                                    <label>Rating</label>

                                    <div class="rating-css">
                                        <div class="star-icon">
                                            <input type="radio" value="1" name="product_rating" id="rating1">
                                            <label for="rating1" class="fa fa-star"></label>
                                            <input type="radio" value="2" name="product_rating" id="rating2">
                                            <label for="rating2" class="fa fa-star"></label>
                                            <input type="radio" value="3" name="product_rating" id="rating3">
                                            <label for="rating3" class="fa fa-star"></label>
                                            <input type="radio" value="4" name="product_rating" id="rating4">
                                            <label for="rating4" class="fa fa-star"></label>
                                            <input type="radio" value="5" name="product_rating" id="rating5" checked>
                                            <label for="rating5" class="fa fa-star"></label>
                                        </div>
                                    </div>
                                    <label>Review title</label>
                                    <input type="text" name="mail" placeholder="Review title">
                                    <label>Add comments</label>
                                    <textarea name="comment" placeholder="Write your comments"></textarea>
                                </form>
                                @endif
                            </div>
                            <div class="customer-reviews">
                                        <span class="p-rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                <h4 class="review-head">he also good and high product see like look</h4>
                                <span class="reviews-editor">kelin patel <span class="review-name">on</span> fab 5, 2021</span>
                                <p class="r-description">he also good and high product see like look</p>
                            </div>
                            <div class="customer-reviews">
                                        <span class="p-rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                <h4 class="review-head">he also good and fresh fruit organic product see like look</h4>
                                <span class="reviews-editor">Melvin louis <span class="review-name">on</span> fab 5, 2021</span>
                                <p class="r-description">he also good and fresh fruit organic product see like look</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <p>Hello</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-5">
                            <div class="more-description table-responsive">
                                <table class="table table-bordered table-elastic table-condensed" style="font-size: 9px;">
                                    <thead>
                                    <tr class="top">
                                        <th rowspan="2" scope="col">Vegetables<br> Serving Size<br> (gram weight/<br> ounce weight)</th>
                                        <th rowspan="2" scope="col">Calories</th>
                                        <th rowspan="2" scope="col">Calories<br> from Fat</th>
                                        <th colspan="2" scope="col">Total Fat</th>
                                        <th colspan="2" scope="col">Sodium</th>
                                        <th colspan="2" scope="col">Potassium</th>
                                        <th colspan="2" scope="col">Total<br> Carbo-hydrate</th>
                                        <th colspan="2" scope="col">Dietary<br> Fiber</th>
                                        <th scope="col">Sugars</th>
                                        <th scope="col">Protein</th>
                                        <th scope="col">Vitamin A</th>
                                        <th scope="col">Vitamin C</th>
                                        <th scope="col">Calcium</th>
                                        <th scope="col">Iron</th>
                                    </tr>
                                    <tr class="text-center" style="font-size: 90%;">
                                        <th scope="col">(g)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(mg)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(mg)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(g)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(g)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(g)</th>
                                        <th scope="col">(g)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(%DV)</th>
                                        <th scope="col">(%DV)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Asparagus<br> 5 spears<br> (93 g/3.3 oz)</th>
                                        <td>20</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>230</td>
                                        <td>7</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>10</td>
                                        <td>15</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bell Pepper<br> 1 medium<br> (148 g/5.3 oz)</th>
                                        <td>25</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>40</td>
                                        <td>2</td>
                                        <td>220</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>190</td>
                                        <td>2</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Broccoli<br> 1 medium stalk<br> (148 g/5.3 oz)</th>
                                        <td>45</td>
                                        <td>0</td>
                                        <td>0.5</td>
                                        <td>1</td>
                                        <td>80</td>
                                        <td>3</td>
                                        <td>460</td>
                                        <td>13</td>
                                        <td>8</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>12</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>6</td>
                                        <td>220</td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Carrot<br> 1 carrot, 7" long,<br> 1 1/4" diameter<br> (78 g/2.8 oz)</th>
                                        <td>30</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>60</td>
                                        <td>3</td>
                                        <td>250</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>110</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Cauliflower<br> 1/6 medium head<br> (99 g/3.5 oz)</th>
                                        <td>25</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>30</td>
                                        <td>1</td>
                                        <td>270</td>
                                        <td>8</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>100</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Celery<br> 2 medium stalks<br> (110 g/3.9 oz)</th>
                                        <td>15</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>115</td>
                                        <td>5</td>
                                        <td>260</td>
                                        <td>7</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>10</td>
                                        <td>15</td>
                                        <td>4</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Cucumber<br> 1/3 medium<br> (99 g/3.5 oz)</th>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>140</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Green (Snap) Beans<br> 3/4 cup cut<br> (83 g/3.0 oz)</th>
                                        <td>20</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>200</td>
                                        <td>6</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>12</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>4</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Green&nbsp;Cabbage<br> 1/12 medium head<br> (84 g/3.0 oz)</th>
                                        <td>25</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>20</td>
                                        <td>1</td>
                                        <td>190</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>70</td>
                                        <td>4</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Green Onion<br> 1/4 cup chopped<br> (25 g/0.9 oz)</th>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>70</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Iceberg Lettuce<br> 1/6 medium head<br> (89 g/3.2 oz)</th>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>125</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Leaf Lettuce<br> 1 1/2 cups shredded<br> (85 g/3.0 oz)</th>
                                        <td>15</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>35</td>
                                        <td>1</td>
                                        <td>170</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>130</td>
                                        <td>6</td>
                                        <td>2</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Mushrooms<br> 5 medium<br> (84 g/3.0 oz)</th>
                                        <td>20</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>15</td>
                                        <td>0</td>
                                        <td>300</td>
                                        <td>9</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Onion<br> 1 medium<br> (148 g/5.3 oz)</th>
                                        <td>45</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>190</td>
                                        <td>5</td>
                                        <td>11</td>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>12</td>
                                        <td>9</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>20</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Potato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                        <td>110</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>620</td>
                                        <td>18</td>
                                        <td>26</td>
                                        <td>9</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>45</td>
                                        <td>2</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Radishes<br> 7 radishes<br> (85 g/3.0 oz)</th>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>55</td>
                                        <td>2</td>
                                        <td>190</td>
                                        <td>5</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>30</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Summer Squash<br> 1/2 medium<br> (98 g/3.5 oz)</th>
                                        <td>20</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>260</td>
                                        <td>7</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>30</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sweet Corn<br> kernels from 1<br> medium ear<br> (90 g/3.2 oz)</th>
                                        <td>90</td>
                                        <td>20</td>
                                        <td>2.5</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>250</td>
                                        <td>7</td>
                                        <td>18</td>
                                        <td>6</td>
                                        <td>2</td>
                                        <td>8</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr class="alert alert-warning">
                                        <th scope="row">Sweet Potato<br> 1 medium, 5" long,<br> 2" diameter<br> (130 g/4.6 oz)</th>
                                        <td>100</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>70</td>
                                        <td>3</td>
                                        <td>440</td>
                                        <td>13</td>
                                        <td>23</td>
                                        <td>8</td>
                                        <td>4</td>
                                        <td>16</td>
                                        <td>7</td>
                                        <td>2</td>
                                        <td>120</td>
                                        <td>30</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tomato<br> 1 medium<br> (148 g/5.3 oz)</th>
                                        <td>25</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>20</td>
                                        <td>1</td>
                                        <td>340</td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>20</td>
                                        <td>40</td>
                                        <td>2</td>
                                        <td>4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product page tab end -->
<!-- releted product start -->
<section class="section-b-padding pro-releted">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
                <div class="releted-products owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        {{--@foreach($related_products as $related_product)
                        <div class="owl-stage" style="transform: translate3d(-603px, 0px, 0px); transition: all 0.25s ease 0s; width: 3618px;">
                            @endforeach-
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                <img class="img-fluid" src="{{$related_product->image}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{$related_product->image}}" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-20%</span>
                                        </div>

                                        <div class="pro-icn">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$related_product->name}}</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">{{$related_product->sale_price}} USD</span>
                                            <span class="old-price"><del>{{$related_product->regular_price}} USD</del></span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        --}}
                            <div class="owl-item active" style="width: 271.5px; margin-right: 30px;">
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev">
                        <span aria-label="Previous">‹
                        </span>
                    </button><button type="button" role="presentation" class="owl-next">
                        <span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- releted product end -->
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
                                    <img src="./details-Vegist_files/pro-page-image.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-2">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-3">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-4">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/pro-page-image1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-5">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-6">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-7">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-8">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="./details-Vegist_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">








                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-1"><img src="./details-Vegist_files/image1.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-2"><img src="./details-Vegist_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-3"><img src="./details-Vegist_files/image3.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-4"><img src="./details-Vegist_files/image4.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-5"><img src="./details-Vegist_files/image5.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-6"><img src="./details-Vegist_files/image6.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-7"><img src="./details-Vegist_files/image8.jpg" class="img-fluid" alt="image"></a>
                                        </li></div><div class="owl-item"><li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/product.html#image-8"><img src="./details-Vegist_files/image7.jpg" class="img-fluid" alt="image"></a>
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
@stop
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#addToWishlist', function (e) {
            e.preventDefault();
            @guest()
            $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'post',
                url: "{{Route('wishlist.store')}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                /*success: function (data) {
                    if(data.wished) {
                        $('.alert-modal1').css('display', 'block');
                    }else {
                        $('.alert-modal2').css('display', 'block');
                    }
                }*/
            });
        });
        $(document).on('click', '.cart-addition', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: "{{Route('site.cart.add')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                    'product_slug' : $(this).attr('data-product-slug'),
                },
                success: function (data) {
                }
            });
        });
    </script>
@stop
