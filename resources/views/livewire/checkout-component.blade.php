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
                <div class="col">
                    <div class="checkout-area">
                        <div class="billing-area">
                            <form>
                                <h2>Billing details</h2>
                                <div class="billing-form">
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <input type="text" name="f-name" placeholder="First name">
                                        </li>
                                        <li class="billing-li">
                                            <input type="text" name="l-name" placeholder="Last name">
                                        </li>
                                    </ul>

                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <select>
                                                <option>Select a province</option>
                                                <option>Cairo</option>
                                                <option>Alexandria</option>
                                                <option>Luxor</option>
                                                <option>Aswan</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <input type="text" name="address" placeholder="Street address">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <input type="text" name="city" placeholder="City,Apartment,suite,unit etc. (Optional)">
                                        </li>
                                    </ul>

                                    <ul class="billing-ul">
                                        <li class="billing-li">
                                            <input type="text" name="--" placeholder="Postcode / ZIP">
                                        </li>
                                    </ul>
                                    <ul class="billing-ul input-2">
                                        <li class="billing-li">
                                            <input type="text" name="mail" placeholder="Email address">
                                        </li>
                                        <li class="billing-li">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            <div class="billing-details">
                                <form>
                                    <h2>Shipping details</h2>
                                    <ul class="shipping-form">
                                        <li class="check-box">
                                            <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                            <label>Ship to a different address?</label>
                                        </li>
                                        <li class="comment-area">
                                            <label>Order notes(Optional)</label>
                                            <textarea name="comments" rows="4" cols="80"></textarea>
                                        </li>
                                    </ul>

                                </form>
                            </div>
                        </div>
                        @if($ship_to_different)
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="checkout-area">
                                                <div class="billing-area">
                                                    <form>
                                                        <h2>A different address</h2>
                                                        <div class="billing-form">
                                                            <ul class="billing-ul input-2">
                                                                <li class="billing-li">
                                                                    <input type="text" name="f-name" placeholder="First name">
                                                                </li>
                                                                <li class="billing-li">
                                                                    <input type="text" name="l-name" placeholder="Last name">
                                                                </li>
                                                            </ul>

                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <select>
                                                                        <option>Select a province</option>
                                                                        <option>Cairo</option>
                                                                        <option>Alexandria</option>
                                                                        <option>Luxor</option>
                                                                        <option>Aswan</option>
                                                                    </select>
                                                                </li>
                                                            </ul>
                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <input type="text" name="address" placeholder="Street address">
                                                                </li>
                                                            </ul>
                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <input type="text" name="city" placeholder="City,Apartment,suite,unit etc. (Optional)">
                                                                </li>
                                                            </ul>

                                                            <ul class="billing-ul">
                                                                <li class="billing-li">
                                                                    <input type="text" name="--" placeholder="Postcode / ZIP">
                                                                </li>
                                                            </ul>
                                                            <ul class="billing-ul input-2">
                                                                <li class="billing-li">
                                                                    <input type="text" name="mail" placeholder="Email address">
                                                                </li>
                                                                <li class="billing-li">
                                                                    <input type="text" name="phone" placeholder="Phone">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                    @endif

                            <div class="order-area">
                            <ul class="order-history">
                                <li class="order-details">
                                    <span><h2>Product:</h2></span>
                                    <span><h2>Total</h2></span>
                                </li>
                                <li class="order-details">
                                    <div class="check-pro-img">
                                        <a href="https://spacingtech.com/html/vegist-final/vegist/product.html"><img src="{{asset('assets/img/1(2).jpg')}}" class="img-fluid" alt="image" style="height: 100px; width: 100px"></a>
                                        <span><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh healthy food</a> </span>
                                    </div>
                                    <span>x2 </span>
                                    <div class="check-content">
                                        <span class="check-price">$93.00</span>
                                    </div>
                                </li>
                                <li class="order-details">
                                    <span>Subtotal:</span>
                                    <span>$323.00</span>
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
                            <form>
                                <ul class="order-form">
                                    <li>
                                        <input type="checkbox" name="--">
                                        <label>Direct bank transfer</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="--">
                                        <label>Cheque payment</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="--">
                                        <label>Paypal</label>
                                    </li>
                                    <li class="pay-icon">
                                        <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>
                                    </li>
                                </ul>
                            </form>
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
