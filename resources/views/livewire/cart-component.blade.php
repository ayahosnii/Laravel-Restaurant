{{--<section class="sb-banner sb-banner-xs sb-banner-color">
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
--}}
<div>
    <section>
        <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">
                    <div class="billing-area" style="width: calc(100% - 30px);">
                        <div class="container">
                            <form>
                                <h2>Your Meal</h2>
                                <div class="billing-form">
                                    <ul class="billing-ul">
                                    @if(Cart::instance('cart')->count() > 0)
                                        <section class="sb-p-90-90">
                                            @if(Session::has('success_message'))
                                                <div class="container">
                                                    <div class="alert alert-success">
                                                        <strong>Success</strong> {{Session::get('success_message')}}
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="container">
                                                <div class="sb-cart-table">
                                                    <div class="sb-cart-table-header">
                                                        <div class="row">
                                                            <div class="col-lg-6">Your Order</div>
                                                            <div class="col-lg-3">Quantity</div>
                                                            <div class="col-lg-1">Price</div>
                                                            <div class="col-lg-1"></div>
                                                        </div>
                                                    </div>
                                                    @foreach(Cart::instance('cart')->content() as $item)
                                                        <div class="sb-cart-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-6">
                                                                    <a class="sb-product" href="route('product.details', $item->slug)">
                                                                        <div class="sb-cover-frame">
                                                                            <img src="{{$item->model->image}}" alt="{{$item->name}}">
                                                                        </div>
                                                                        <div class="sb-prod-description">
                                                                            <h4 class="sb-mb-10">{{$item->model->name}}</h4>
                                                                            <p class="sb-text sb-text-sm">{{$item->model->short_description}}</p>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6 col-lg-3">
                                                                    <div>
                                                                        <div class="sb-input-number-frame">
                                                                            <a class="sb-input-number-btn sb-sub" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">-</a>
                                                                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >
                                                                            <a class="sb-input-number-btn sb-add"  href="#" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">+</a>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-right"> <a href="#">Save later</a> </p>
                                                                </div>
                                                                <div class="col-3 col-lg-1">
                                                                    <div class="sb-price-1"><span>Price: </span>£{{ number_format($item->price, 2) }}</div>
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

                                                                    <a href="#" class="sb-remove" wire:click.prevent="destroy('{{ $item->rowId }}')">+</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </section>

                                    @else

                                        <div class="text-center" style="padding: 60px 0;">
                                            <h1>Your cart is empty!!</h1>
                                            <p style="padding-bottom: 50px">Add items to it now</p>
                                            <div style="padding-bottom: 50px">
                                                <a href="{{route('restaurant.index')}}" class="btn btn-outline-secondary" style="color: #F5C332">Shop Now</a>
                                            </div>

                                        </div>
                                    @endif

                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="sb-cart-total">
                        <div class="sb-sum">
                            <div class="row">
                                <div class="col-8">
                                    <div class="sb-total-title">Subtotal:</div>
                                </div>
                                <div class="col-4">
                                    <div class="sb-price-1 text-right">£E{{ $subtotal }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="sb-sum">
                            <div class="row">
                                <div class="col-8">
                                    <div class="sb-total-title">Tax:</div>
                                </div>
                                <div class="col-4">
                                    <div class="sb-price-1 text-right">£E{{-- $tax --}}</div>
                                </div>
                            </div>
                        </div>
                        @if ($discount > 0)
                            <div class="sb-sum">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="sb-total-title">Discount:</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="sb-price-1 text-right">£E{{ $discount }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="sb-sum">
                            <div class="row">
                                <div class="col-8">
                                    <div class="sb-total-title">Total:</div>
                                </div>
                                <div class="col-4">
                                    <div class="sb-price-1 text-right">£E{{ $total }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-8">
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
                                                <form wire:submit.prevent="applyCouponCode">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <input type="text" name="code" wire:model.defer="couponCode" wire:keydown.enter="applyCouponCode">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                        </div>


                                    </div>
                                    <div class="col-5">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                               <span class="sb-icon">
                                 <img src="{{asset('assets/img/arrow.svg')}}" alt="icon">
                                </span>
                                <button type="submit" class="btn btn-sm" wire:loading.attr="disabled">Apply</button>
                        </div>
                        <div class="sb-cart-btns-frame text-right">
                        <a href="{{route('restaurant.index')}}" class="sb-btn sb-btn-2 sb-btn-gray">
                    <span class="sb-icon">
                      <img src="{{asset('assets/img/arrow-2.svg')}}" alt="icon">
                    </span>
                            <span>Continue shopping</span>
                        </a>
                        <a href="{{route('checkout')}}" class="sb-btn sb-m-0">
                    <span class="sb-icon">
                      <img src="{{asset('assets/img/arrow.svg')}}" alt="icon">
                    </span>
                            <span>Order Delivery</span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>






