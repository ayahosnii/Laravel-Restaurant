<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="checkout-area">
                    <div class="billing-area">
                        <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">

                            <h2>Billing details</h2>
                            <div class="billing-form">
                                <ul class="billing-ul input-2">
                                    <li class="billing-li">
                                        <input type="text" name="firstname" placeholder="First name" value="{{ $user->name ?? '' }}" wire:model="firstname" wire:ignore>
                                        @error('firstname') <span class="error">{{ $message }}</span> @enderror
                                    </li>
                                    <li class="billing-li">
                                        <input type="text" name="lastname" placeholder="Last name" wire:model="lastname" wire:ignore>
                                        @error('lastname') <span class="error">{{ $message }}</span> @enderror

                                    </li>
                                </ul>

                                <ul class="billing-ul">
                                    <li class="billing-li">
                                        <select name="province" id="province" wire:model="province" onChange="showMap(event)">
                                            <optgroup label="Select a province">
                                                <option selected="true" style='display: none'></option>
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
                                        <input type="text" name="address" id="address" onchange="showMap(event)" placeholder="Street address" wire:model="address">
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
                                <ul class="billing-ul" onload="getLocation()">
                                    <button class="btn btn-outline-warning" onclick="showMap(event)">Show Map</button>
                                    <div id="map" style="height: 500px; display: none;" wire:ignore></div>
                                    <input type="text" id="latitude" name="latitude" placeholder="Latitude" readonly>
                                    <input type="text" class="text-danger" id="longitude" name="longitude" placeholder="Longitude" readonly>
                                    <p id="address-display"></p>
                                    <button id="add-address-btn" type="button">Add Address</button>
                                </ul>
                                <div class="billing-details">

                                    <h2>Shipping details</h2>
                                    <ul class="shipping-form">
                                        <li class="check-box">
                                            <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                            <label>Ship to a different address?</label>
                                        </li>

                                    </ul>
                                </div>

                                <label for="card-element" style="font-size: 30px">Credit or debit card</label>
                                <div id="card-element" style="margin: 10px" wire:ignore>
                                </div>

                                @if($ship_to_different)
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
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
                                                            <select id="d_province" wire:model="d_province">
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
                                                            <input type="text" name="address" id="d_address" placeholder="Street address" wire:model="d_address">
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
                                        </div>
                                    </div>

                                                @endif


                                <div id="card-errors" role="alert"></div>
                                    <button wire:loading.attr="disabled" type="submit">Pay</button>
                                    <button type="submit" class="btn-style1">Place order</button>
                        </form>
                                            </div>
                                        </div>
                                        <div class="order-area">
                                            <div class="check-pro">
                                                <h2>In your cart ({{Cart::instance('cart')->count()}})</h2>
                                                <ul class="check-ul">
                                                    @foreach(Cart::instance('cart')->content() as $item)
                                                        <li>
                                                            <div class="check-pro-img">
                                                                <a href="{{route('product.details', ['slug' => $item -> model ->slug])}}"><img src="{{$item->model->image}}" class="img-fluid" alt="image" style="height: 100px; width: 100px"></a>
                                                                <span><a href="{{route('product.details', ['slug' => $item -> model ->slug])}}">{{ substr($item->model->name,0,5) }}</a> </span>
                                                            </div>
                                                            <div class="check-content">
                                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$item->model->name}}</a>
                                                                <span class="check-code-blod">Product code: <span>x{{$item->qty}}</span></span>
                                                                <span class="check-price">{{$item->price}} LE</span>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <h2>Your order</h2>
                                            <ul class="order-history">
                                                <li class="order-details">
                                                    <span>Product:</span>
                                                    <span>Total</span>
                                                </li>
                                                @foreach(Cart::instance('cart')->content() as $item)
                                                    <li class="order-details">
                                                    <li class="order-details">
                                                        <span>{{$item->model->name}}:</span>
                                                        <span>{{$item->price}} LE</span>
                                                    </li>
                                                @endforeach
                                                <li class="order-details">
                                                    <span>Subtotal:</span>
                                                    <span>{{Cart::instance('cart')->subtotal()}} LE</span>
                                                </li>
                                                <li class="order-details">
                                                    <span>Tax ({{config('cart.tax')}}%):</span>
                                                    <span>{{Cart::instance('cart')->tax()}} LE</span>
                                                </li>
                                                <li class="order-details">
                                                    <span>Total:</span>
                                                    <span>{{Cart::instance('cart')->total()}} LE</span>
                                                </li>

                                            </ul>
                                        </div>




                    </div>
                </div>
            </div>
        </div>

                        @if($errors->isEmpty())
                            <div wire:ignore id="processing" style="font-size:22px; margin-bottom:20px;padding-left:37px;color:green;display:none;">
                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                <span>Processing...</span>
                            </div>
                        @endif
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        console.log('work')
        cardElement.mount('#card-element');
        var cardholderName = document.getElementById('cardholder-name');
        var submitButton = document.getElementById('submit-button');
        submitButton.addEventListener('click', function(ev) {
            ev.preventDefault();
            stripe.confirmCardPayment('{{ $paymentIntentId }}', {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardholderName.value
                    }
                }
            }).then(function(result) {
                if (result.error) {
                    console.error(result.error);
                    alert('Payment failed');
                } else {
                    Livewire.emit('orderPlaced');
                }
            });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnrM9ISkivX_c_h82WzlOx-REJHnQLKQ&callback=initMap"async defer></script>
    <script>


        function showMap(event) {
            event.preventDefault(); // prevent page refresh
            document.getElementById("map").style.display = "block";

            // Retrieve the user's address and province from input fields
            var address = document.getElementById('address').value;
            var province = document.getElementById('province').value;

            console.log(address);
            console.log(province);

            // Send a geocoding request to Nominatim API
            var url =
                "https://nominatim.openstreetmap.org/search?format=json&limit=1&q=" +
                encodeURIComponent(address + ", " + province) +
            "&accept-language=ar";
            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    if (data.length > 0) {
                        // Parse the response to get the latitude and longitude coordinates
                        var latitude = parseFloat(data[0].lat);
                        var longitude = parseFloat(data[0].lon);



                        // Display the map
                        var map = new google.maps.Map(document.getElementById("map"), {
                            center: { lat: latitude, lng: longitude },
                            zoom: 18,
                            myLocationButton: true
                        });
                        // Add a marker to the map
                        var marker = new google.maps.Marker({
                            position: { lat: latitude, lng: longitude },
                            map: map,
                            draggable: true, // make the marker draggable
                        });

                        map.addListener("click", function(event) {
                            marker.setPosition(event.latLng);
                        });

                        // Update the latitude and longitude inputs with the initial coordinates
                        document.getElementById("latitude").value = latitude;
                        document.getElementById("longitude").value = longitude;


                        Livewire.on('placeOrder', ({ latitude, longitude }) => {
                            // Handle the placeOrder event here
                            console.log(`Placing order at (${latitude}, ${longitude})`);
                        });

                        // Reverse geocode the coordinates to get the address
                        var geocodeUrl = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + latitude + "&lon=" + longitude + "&accept-language=ar"; // Set the language to Arabic

                        fetch(geocodeUrl)
                            .then(response => response.json())
                            .then(data => {
                                var display_name = data.display_name;
                                var addressElement = document.getElementById("address-display");
                                addressElement.innerText = display_name;
                            })


                    .catch(error => {
                                console.error("Error:", error);
                                alert("Geocode was not successful for the following reason: " + error.message);
                            });

                        var addAddressBtn = document.getElementById("add-address-btn");
                        addAddressBtn.addEventListener("click", function() {
                            var addressResult = document.getElementById("address-display").innerText;
                            var addressInput = document.getElementById("address");
                            addressInput.value = addressResult;
                        });


                        // Add an event listener to the marker to update the displayed address when moved
                        marker.addListener("dragend", function(event) {
                            var location = marker.getPosition();
                            var geocodeUrl = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + location.lat() + "&lon=" + location.lng() + "&accept-language=ar"; // Set the language to Arabic
                            fetch(geocodeUrl)
                                .then(response => response.json())
                                .then(data => {
                                    console.log(data)
                                    var display_name = data.display_name;
                                    var addressElement = document.getElementById("address-display");
                                    addressElement.innerText = display_name;
                                })
                                .catch(error => {
                                    console.error("Error:", error);
                                    alert("Geocode was not successful for the following reason: " + error.message);
                                });
                        });
                    } else {
                        // Handle error response
                        alert("Geocode was not successful for the following reason: no result found");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert("Geocode was not successful for the following reason: " + error.message);
                });
        }
    </script>







@if ($payMethod === 'card' && $showInput)
        <script>
            document.addEventListener("livewire:load", function() {
                const stripe = Stripe('{{ config('services.stripe.key') }}');
                const elements = stripe.elements();
                const cardElement = elements.create('card');
                cardElement.mount('#card-element');
            });
        </script>
        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--    <section class="about-breadcrumb">--}}
{{--        <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <div class="about-l">--}}
{{--                            <ul class="about-link">--}}
{{--                                <li class="go-home"><a href="https://spacingtech.com/html/vegist-final/vegist/index1.html">Home</a></li>--}}
{{--                                <li class="about-p"><span>Your checkout</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <section class="section-tb-padding">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="checkout-area">--}}
{{--                            <div class="billing-area">--}}
{{--                                <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">--}}
{{--                                    <h2>Billing details</h2>--}}
{{--                                    <div class="billing-form">--}}
{{--                                        <ul class="billing-ul input-2">--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="firstname" placeholder="First name" value="{{ $user->name ?? '' }}" wire:model="firstname">--}}
{{--                                                @error('firstname') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="lastname" placeholder="Last name" wire:model="lastname">--}}
{{--                                                @error('lastname') <span class="error">{{ $message }}</span> @enderror--}}

{{--                                            </li>--}}
{{--                                        </ul>--}}

{{--                                        <ul class="billing-ul">--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <select name="province" wire:model="province">--}}
{{--                                                    <optgroup label="Select a province">--}}
{{--                                                        <option value="cairo">Cairo</option>--}}
{{--                                                        <option value="alexandria">Alexandria</option>--}}
{{--                                                        <option value="luxor">Luxor</option>--}}
{{--                                                        <option value="aswan">Aswan</option>--}}
{{--                                                    </optgroup>--}}
{{--                                                </select>--}}
{{--                                                @error('province') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="billing-ul">--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="address" placeholder="Street address" wire:model="address">--}}
{{--                                                @error('address') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="billing-ul">--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="city" placeholder="City,Apartment,suite,unit etc. " wire:model="city">--}}
{{--                                                @error('city') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}

{{--                                        <ul class="billing-ul">--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="zipcode" placeholder="Postcode / ZIP (Optional)" wire:model="zipcode">--}}
{{--                                                @error('zipcode') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <ul class="billing-ul input-2">--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="email" placeholder="Email address" value="{{ $user->email ?? '' }}" wire:model="email">--}}
{{--                                                @error('email') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                            <li class="billing-li">--}}
{{--                                                <input type="text" name="mobile" placeholder="Phone" value="{{ $user->mobile ?? '' }}" wire:model="mobile">--}}
{{--                                                @error('mobile') <span class="error">{{ $message }}</span> @enderror--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}

{{--                                    <div class="billing-details">--}}

{{--                                        <h2>Shipping details</h2>--}}
{{--                                        <ul class="shipping-form">--}}
{{--                                            <li class="check-box">--}}
{{--                                                <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">--}}
{{--                                                <label>Ship to a different address?</label>--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    @if($ship_to_different)--}}
{{--                                        <div class="container">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="checkout-area">--}}
{{--                                                        <div class="billing-area">--}}

{{--                                                            <h2>A different address</h2>--}}
{{--                                                            <div class="billing-form">--}}
{{--                                                                <ul class="billing-ul input-2">--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="f-name" placeholder="First name" wire:model="d_firstname">--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="l-name" placeholder="Last name" wire:model="d_lastname">--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}

{{--                                                                <ul class="billing-ul">--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <select wire:model="d_province">--}}
{{--                                                                            <optgroup label="Select a province">--}}
{{--                                                                                <option value="cairo">Cairo</option>--}}
{{--                                                                                <option value="alexandria">Alexandria</option>--}}
{{--                                                                                <option value="luxor">Luxor</option>--}}
{{--                                                                                <option value="aswan">Aswan</option>--}}
{{--                                                                            </optgroup>--}}
{{--                                                                        </select>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                                <ul class="billing-ul">--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="address" placeholder="Street address" wire:model="d_address">--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                                <ul class="billing-ul">--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="city" placeholder="City,Apartment,suite,unit etc. " wire:model="d_city">--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}

{{--                                                                <ul class="billing-ul">--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="zipcode" placeholder="Postcode / ZIP (Optional)" wire:model="d_zipcode">--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                                <ul class="billing-ul input-2">--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="mail" placeholder="Email address" wire:model="d_email">--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="billing-li">--}}
{{--                                                                        <input type="text" name="mobile" placeholder="Phone" wire:model="d_mobile">--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        @endif--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="checkout-btn">--}}
{{--                                            <button type="submit" class="btn-style1">Place order</button>--}}
{{--                                        </div>--}}
{{--                                        @if(Session::has('checkout'))--}}
{{--                                            <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>--}}
{{--                                        @endif--}}

{{--                                        @if($errors->isEmpty())--}}
{{--                                            <div wire:ignore id="processing" style="font-size:22px; margin-bottom:20px;padding-left:37px;color:green;display:none;">--}}
{{--                                                <i class="fa fa-spinner fa-pulse fa-fw"></i>--}}
{{--                                                <span>Processing...</span>--}}
{{--                                            </div>--}}
{{--                                @endif--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <div class="order-area">--}}
{{--                            <ul class="order-history">--}}
{{--                                <li class="order-details">--}}
{{--                                    <span><h2>Product:</h2></span>--}}
{{--                                    <span><h2>Total</h2></span>--}}
{{--                                </li>--}}
{{--                                @foreach(Cart::instance('cart')->content() as $item)--}}
{{--                                    <li class="order-details">--}}
{{--                                        <div class="col-md-2" style="display: inline-block">--}}
{{--                                            <div class="check-pro-img">--}}
{{--                                                <a href="{{route('product.details', ['slug' => $item -> model ->slug])}}"><img src="{{$item->model->image}}" class="img-fluid" alt="image" style="height: 100px; width: 100px"></a>--}}
{{--                                                <span><a href="{{route('product.details', ['slug' => $item -> model ->slug])}}">{{ substr($item->model->name,0,5) }}</a> </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-2" style="display: inline-block">--}}
{{--                                            <span>x{{$item->qty}} </span>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-2" style="display: inline-block">--}}
{{--                                            <div class="check-content">--}}
{{--                                                <span class="check-price">{{$item->model->regular_price}} LE</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                                <li class="order-details">--}}
{{--                                    <span>Subtotal:</span>--}}
{{--                                    <span>${{$item->subtotal}}</span>--}}
{{--                                </li>--}}
{{--                                <li class="order-details">--}}
{{--                                    <span>Shipping Charge:</span>--}}
{{--                                    <span>Free shipping</span>--}}
{{--                                </li>--}}
{{--                                <li class="order-details">--}}
{{--                                    <span>Total:</span>--}}
{{--                                    <span>$323.00</span>--}}
{{--                                </li>--}}
{{--                                <li class="order-details">--}}
{{--                                    <span>Coupon:</span>--}}
{{--                                    <span><input type="text"></span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}

{{--                            <ul class="order-form">--}}
{{--                                <li>--}}
{{--                                    <input type="checkbox" name="pay-method" value="cash">--}}
{{--                                    <label>Cash</label>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <input type="checkbox" name="pay-method" value="card">--}}
{{--                                    <label>Debit / Credit Card</label>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <input type="checkbox" name="pay-method">--}}
{{--                                    <label>Paypal</label>--}}
{{--                                </li>--}}
{{--                                <li class="pay-icon">--}}
{{--                                    <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>--}}
{{--                                    <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>--}}
{{--                                    <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>--}}
{{--                                    <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </section>--}}
