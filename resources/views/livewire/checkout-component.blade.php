<div>
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="https://spacingtech.com/html/vegist-final/vegist/index1.html">Home</a></li>
                                <li class="about-p"><span>Your checkout</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- checkout page start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="checkout-area">
                        <div class="billing-area">
                            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
                                <h2>Billing details</h2>
                                <div class="billing-form">
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <input type="text" name="firstname" placeholder="First name" value="{{ $user->name ?? '' }}" wire:model="firstname">
                                            @error('firstname') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                        <li class="billing-li">
                                            <input type="text" name="lastname" placeholder="Last name" wire:model="lastname">
                                            @error('lastname') <span class="error">{{ $message }}</span> @enderror

                                        </li>
                                    </ul>

                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <select name="province" wire:model="province">
                                                <optgroup label="Select a province">
                                                <option value="cairo">Cairo</option>
                                                <option value="alexandria">Alexandria</option>
                                                <option value="luxor">Luxor</option>
                                                <option value="aswan">Aswan</option>
                                                </optgroup>
                                            </select>
                                            @error('province') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <input type="text" name="address" placeholder="Street address" wire:model="address">
                                            @error('address') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <input type="text" name="city" placeholder="City,Apartment,suite,unit etc. " wire:model="city">
                                            @error('city') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                    </ul>

                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <input type="text" name="zipcode" placeholder="Postcode / ZIP (Optional)" wire:model="zipcode">
                                            @error('zipcode') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                    </ul>
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <input type="text" name="email" placeholder="Email address" value="{{ $user->email ?? '' }}" wire:model="email">
                                            @error('email') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                        <li class="billing-li">
                                            <input type="text" name="mobile" placeholder="Phone" value="{{ $user->mobile ?? '' }}" wire:model="mobile">
                                            @error('mobile') <span class="error">{{ $message }}</span> @enderror
                                        </li>
                                    </ul>
                                </div>

                            <div class="billing-details">

                                    <h2>Shipping details</h2>
                                    <ul class="shipping-form">
                                        <li class="check-box">
                                            <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                            <label>Ship to a different address?</label>
                                        </li>

                                    </ul>
                        </div>
                        @if($ship_to_different)
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="checkout-area">
                                                <div class="billing-area">

                                                        <h2>A different address</h2>
                                                        <div class="billing-form">
                                                            <ul class="billing-ul input-2">
                                                                <li class="billing-li">
                                                                    <input type="text" name="f-name" placeholder="First name" wire:model="d_firstname">
                                                                </li>
                                                                <li class="billing-li">
                                                                    <input type="text" name="l-name" placeholder="Last name" wire:model="d_lastname">
                                                                </li>
                                                            </ul>

                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <select wire:model="d_province">
                                                                        <optgroup label="Select a province">
                                                                            <option value="cairo">Cairo</option>
                                                                            <option value="alexandria">Alexandria</option>
                                                                            <option value="luxor">Luxor</option>
                                                                            <option value="aswan">Aswan</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </li>
                                                            </ul>
                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <input type="text" name="address" placeholder="Street address" wire:model="d_address">
                                                                </li>
                                                            </ul>
                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <input type="text" name="city" placeholder="City,Apartment,suite,unit etc. " wire:model="d_city">
                                                                </li>
                                                            </ul>

                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <input type="text" name="zipcode" placeholder="Postcode / ZIP (Optional)" wire:model="d_zipcode">
                                                                </li>
                                                            </ul>
                                                            <ul class="billing-ul input-2">
                                                                <li class="billing-li">
                                                                    <input type="text" name="mail" placeholder="Email address" wire:model="d_email">
                                                                </li>
                                                                <li class="billing-li">
                                                                    <input type="text" name="mobile" placeholder="Phone" wire:model="d_mobile">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                    @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="checkout-btn">
                                <button type="submit" class="btn-style1">Place order</button>
                            </div>
                                    @if(Session::has('checkout'))
                                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>
                                    @endif

                                    @if($errors->isEmpty())
                                        <div wire:ignore id="processing" style="font-size:22px; margin-bottom:20px;padding-left:37px;color:green;display:none;">
                                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                            <span>Processing...</span>
                                        </div>
                                    @endif


                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="order-area">
                        <ul class="order-history">
                            <li class="order-details">
                                <span><h2>Product:</h2></span>
                                <span><h2>Total</h2></span>
                            </li>
                            @foreach(Cart::instance('cart')->content() as $item)
                                <li class="order-details">
                                    <div class="col-md-2" style="display: inline-block">
                                        <div class="check-pro-img">
                                            <a href="{{route('product.details', ['slug' => $item -> model ->slug])}}"><img src="{{$item->model->image}}" class="img-fluid" alt="image" style="height: 100px; width: 100px"></a>
                                            <span><a href="{{route('product.details', ['slug' => $item -> model ->slug])}}">{{ substr($item->model->name,0,5) }}</a> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="display: inline-block">
                                        <span>x{{$item->qty}} </span>
                                    </div>
                                    <div class="col-md-2" style="display: inline-block">
                                        <div class="check-content">
                                            <span class="check-price">{{$item->model->regular_price}} LE</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <li class="order-details">
                                <span>Subtotal:</span>
                                <span>${{$item->subtotal}}</span>
                            </li>
                            <li class="order-details">
                                <span>Shipping Charge:</span>
                                <span>Free shipping</span>
                            </li>
                            <li class="order-details">
                                <span>Total:</span>
                                <span>$323.00</span>
                            </li>
                            <li class="order-details">
                                <span>Coupon:</span>
                                <span><input type="text"></span>
                            </li>
                        </ul>

                        <ul class="order-form">
                            <li>
                                <input type="checkbox" name="pay-method" value="cash">
                                <label>Cash</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pay-method" value="card">
                                <label>Debit / Credit Card</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pay-method">
                                <label>Paypal</label>
                            </li>
                            <li class="pay-icon">
                                <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>

                </form>

            </div>
        </div>
    </section>
</div>
