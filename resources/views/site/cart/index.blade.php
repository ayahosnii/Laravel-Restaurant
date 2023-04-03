@extends('layouts.base-vue')
@section('content')
<section class="sb-banner sb-banner-xs sb-banner-color">
    <div class="container" style="background-image: url({{asset('assets/img/news-popup.jpg')}}");>
        <div class="row">
            <div class="col-lg-12">
                <div class="sb-main-title-frame">
                    <div class="sb-main-title">
                        <h1 class="sb-h2">Your order.</h1>
                        <ul class="sb-breadcrumbs">
                            <li><a href="/">Home</a></li> /
                            <li><a href="/shop">Shop</a></li> /
                            <li><a href="/cart">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-tb-padding" style="width: 140%">
    <div class="row">
        <div class="col-md-10">
            <div class="checkout-area">
                <div class="billing-area" style="width: 70%">
                    <div class="container">
                        <form>
                            <h2>Your Cart</h2>
                            <h6> There are  ({{$basket -> itemCount()}}) items in your cart</h6>
                            <div class="billing-form">
                                <ul class="billing-ul input-2">
                                   @if($basket->all())
                                        <section class="sb-p-90-90">
                                            @if(Session::has('success_message'))
                                                <div class="container">
                                                    <div class="alert alert-success">
                                                        <strong>Success</strong> {{Session::get('success_message')}}
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="container">
                                                <div class="sb-cart-table" style="width: 1000px">
                                                    <div class="sb-cart-table-header">
                                                        <div class="row">
                                                            <div class="col-lg-6">Product</div>
                                                            <div class="col-lg-3">Quantity</div>
                                                            <div class="col-lg-1">Price</div>
                                                            <div class="col-lg-1"></div>
                                                        </div>
                                                    </div>
                                                    @foreach($basket -> all() as $product)
                                                        <div class="sb-cart-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-6">
                                                                    <a class="sb-product" href="/">
                                                                        <div class="sb-cover-frame">
                                                                            <img src="{{$product->image}}" alt="{{$product->name}}">
                                                                        </div>
                                                                        <div class="sb-prod-description">
                                                                            <h5 class="sb-mb-10">
                                                                                <a class="label"
                                                                                   href="{{route('meal.details',$product -> slug)}}"
                                                                                   data-id_customization="0">{{$product -> name}}</a>
                                                                                <p class="sb-text sb-text-sm">{{$product->short_description}}</p>
                                                                            </h5>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6 col-lg-3">
                                                                    <div>
                                                                        <div class="sb-input-number-frame">
                                                                            <a class="sb-input-number-btn sb-sub" href="#">-</a>
                                                                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
                                                                            <a class="sb-input-number-btn sb-add"  href="#">+</a>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-right"> <a href="#">Save later</a> </p>
                                                                </div>
                                                                <div class="col-3 col-lg-1">
                                                                    <div class="sb-price-1">
                                                                        <span>Price: </span>
                                                                    </div>
                                                                    @if(isset($product -> sale_price))
                                                                        <span
                                                                            class="regular-price">{{$product -> sale_price}}  £E</span>
                                                                    @else
                                                                        {{$product -> regular_price}}  £E
                                                                    @endif
                                                                </div>

                                                                <div class="col-1">
                                                                    <style>
                                                                        .sb-remove {
                                                                            float: right;
                                                                            text-align: center;
                                                                            display: block;
                                                                            border-radius: 50%;
                                                                            background-color: #F2F3F5;
                                                                            cursor: pointer;
                                                                            width: 30px;
                                                                            height: 30px;
                                                                            line-height: 30px;
                                                                            transform: rotate(45deg);
                                                                            transition: 0.3s ease-in-out;
                                                                        }
                                                                    </style>

                                                                    <a href="#" class="remove-from-cart sb-remove" onclick="$(this).closest('.cart-item').remove()"
                                                                       rel="nofollow"
                                                                       data-link-action="delete-from-cart"
                                                                       data-id-product="{{$product -> id}}"
                                                                       data-url-product="{{route('site.cart.update',$product -> slug)}}"
                                                                       data-id-customization="">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                        @endforeach
                                </ul>
                            </div>
                        </form>

                    </div>
                </div>


                <div class="order-area" style="width: 200px">
                    <ul class="order-history">
                        <li class="order-details">
                            <span><h2>Save Later:</h2></span>
                        </li>
                        <li class="order-details">
                            <div class="check-pro-img">
                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html"><img src="{{asset('assets/img/1(2).jpg')}}" class="img-fluid" alt="image" style="height: 100px; width: 100px"></a>
                                <span><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh healthy food</a> </span>
                            </div>
                        </li>
                    </ul>
                    <form>
                        <div class="checkout-btn">
                            <a href="javascript:void(0)" class="btn-style1">Place order</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</div>


<div class="row justify-content-end">
    <div class="col-md-6">
        <div class="sb-cart-total">
            <div class="sb-sum">
                <div class="row">
                    <div class="col-8">
                        <div class="sb-total-title">Coupon:</div>
                        @if(Session::has('coupon_message'))
                            <div class="alert alert-danger" role="danger">
                                {{ Session::get('coupon_message') }}
                            </div>
                        @endif
                        <div style="padding: 15px">
                            <form action="" wire:submit.prevent="applyCouponCode">
                                <div class="row">
                                    <div class="col-md-7">
                                        <input type="text" name="code" wire:model="couponCode">
                                    </div>
                                    <div class="col-md-5">
                                                <span class="sb-icon">
                                                  <img src="{{asset('assets/img/arrow.svg')}}" alt="icon">
                                                </span>
                                        <button type="submit" class="btn btn-sm">Apply</button>
                                    </div>
                            </form>
                        </div>

                    </div>


                </div>
                <div class="col-5">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="sb-cart-total">
        <div class="sb-sum">
            <div class="row">
                <div class="col-8">
                    <div class="sb-total-title">Subtotal:</div>
                </div>
                <div class="col-4">
                    <div class="sb-price-1 text-right">{{$basket  -> subTotal()}}£E</div>
                </div>
            </div>
        </div>
        <div class="sb-sum">
            <div class="row">
                <div class="col-8">
                    <div class="sb-total-title">Tax:</div>
                </div>
                <div class="col-4">
                    <div class="sb-price-1 text-right">0 £E</div>
                </div>
            </div>
        </div>
        <div class="sb-sum">
            <div class="row">
                <div class="col-8">
                    <div class="sb-total-title">Estimated shipping:</div>
                </div>
                <div class="col-4">
                    <div class="sb-price-1 text-right">Free Shipping</div>
                </div>
            </div>
        </div>

        @if(Session::has('coupon'))
            <div class="sb-sum">
                <div class="row">
                    <div class="col-8">
                        <div class="sb-total-title">Discount:</div>
                    </div>
                    <div class="col-4">
                        <div class="sb-price-1 text-right">{{Session::get('coupon')['code']}} <b class="index"> - ${{$discount}}</b></div>
                    </div>
                </div>
            </div>
            <div class="sb-sum">
                <div class="row">
                    <div class="col-8">
                        <div class="sb-total-title">Discount:</div>
                    </div>
                    <div class="col-4">
                        <div class="sb-price-1 text-right"><b class="index">${{number_format($subtotalAfterDiscount,2)}}</b></div>
                    </div>
                </div>
            </div>
        @endif


        <div class="sb-realy-sum">
            <div class="row">
                <div class="col-8">
                    <div class="sb-total-title">Total:</div>
                </div>
                <div class="col-4">
                    <div class="sb-price-2 text-right">{{$basket  -> subTotal()}}£E</div>
                </div>
            </div>
        </div>
    </div>
    <div class="sb-cart-btns-frame text-right">
        <a href="{{route('restaurant.index')}}" class="sb-btn sb-btn-2 sb-btn-gray">
                    <span class="sb-icon">
                      <img src="{{asset('assets/img/arrow-2.svg')}}" alt="icon">
                    </span>
            <span>Continue shopping</span>
        </a>
        <a href="https://elanta.app/nazar/starbelly-demo/checkout.html" class="sb-btn sb-m-0">
                    <span class="sb-icon">
                      <img src="{{asset('assets/img/arrow.svg')}}" alt="icon">
                    </span>
            <span>Checkout</span>
        </a>
    </div>
</div>
</div>
</div>

@else
    <div class="text-center" style="padding: 60px 0;">
        <h1>Your cart is empty!!</h1>
        <p style="padding-bottom: 50px">Add items to it now</p>
        <div style="padding-bottom: 50px">
            <a href="/shop" class="btn btn-outline-secondary" style="color: #F5C332">Shop Now</a>
        </div>

    </div>
    @endif
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
        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: $(this).attr('data-url-product'),
                data: {
                    'product_id': $(this).attr('data-id-product'),
                },
                success: function (data) {
                }
            });
        });
    </script>
@stop
