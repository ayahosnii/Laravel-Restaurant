@extends('providers.includes.layout')
@section('providers-containers')
    <!-- order history start -->
    <section class="order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-history">
                        <div class="branch-form">
                            <h3 class="create">Create A Branch</h3>
                            <form action="{{route('branch.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="pro-img">
                                    <div class="custom-file h-auto" style="display: block; height: auto!important;">
                                        <input type="file" name="image" class="file-upload custom-file-input hidden" id="input_scr" onchange="previewFile()" hidden>
                                        <label class="border-0 mb-0 cursor" for="restaurant-logo">
                                            <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="img-fluid" style="width: 130px; height: 130px">
                                            <span id="img_here"></span>
                                            <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="provider-rest-img d-none" style="width: 130px; height: 130px">

                                    </div>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Branch's name</label>
                                        <input type="text" name="bran_name" placeholder="Branch's name" value="">
                                    </li>
                                   <li>
                                        <label>Branch's username</label>
                                        <input type="text" name="b_username" placeholder="username" value="">
                                    </li>

                                </ul>
                                    <ul class="pro-input-label">
                                        <li>
                                            <label>Delivery price</label>
                                            <input type="number" name="delivery_price" placeholder="Delivery price" value="">
                                        </li>
                                        <li>
                                            <label>Branch's Category</label>
                                            <select class="custom-select text-gray font-body-md"  name="category_id" id="scategory_id" required>


                                                @foreach($cats as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat-> name  }}</option>
                                                @endforeach
                                            </select>                                    </li>
                                    </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Branch's address (en)</label>
                                        <input type="text" name="bran_address_en" placeholder="Address" value="">
                                    </li>
                                    <li>
                                        <label>Branch's address (ar)</label>
                                        <input type="text" id="bran_address_ar" name="bran_address_ar" placeholder="Address" value="">
                                    </li>
                                </ul>
                                    <ul class="pro-input-label">
                                        <li>
                                            <label>Governorates</label>
                                                <select name="governorates" id="governorates" onChange="showMap(event)">
                                                    @foreach($governorates as $governorate)
                                                            <option id="{{ strtolower($governorate->governorate_name_en) }}" value="{{ $governorate->id }}">
                                                                {{ get_default_language() == 'en' ? $governorate->governorate_name_en : $governorate->governorate_name_ar }}
                                                            </option>
                                                    @endforeach
                                                </select>
                                        </li>
                                        <li>
                                            <label>Cities</label>
                                            <select type="text" id="cities">

                                            </select>

                                        </li>
                                    </ul>
                                    <div id="map" style="height: 500px; display: none;"></div>
                                    <ul class="pro-input-label">
                                        <li>
                                            <label>latitude</label>
                                            <input type="text" id="latitude" name="latitude" placeholder="Latitude" readonly>
                                        </li>
                                        <li>
                                            <label>longitude</label>
                                            <input type="text" class="text-danger" id="longitude" name="longitude" placeholder="Longitude" readonly>
                                        </li>
                                        <p id="address-display"></p>
                                        <button id="add-address-btn" type="button">Add Address</button>
                                    </ul>

                                    <ul class="pro-input-label">
                                    <li>
                                        <label>Password</label>
                                        <input type="password" name="director_password" placeholder="Password" value="">
                                    </li>

                                        <li>
                                            <label>Phone</label>
                                            <input type="text" name="phone" placeholder="Phone" value="">
                                        </li>
                                </ul>
                                <ul class="pro-input-label">
                                <li>
                                    <label>Work Hours</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="work_hours" placeholder="Work Hours" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                     <label>Details In English</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="bran_en_details" placeholder="English Details" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                    <label>Details In Arabic</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="bran_ar_details" placeholder="Arabic Details" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                </li>

                                </ul>
                                <ul class="pro-submit">
                                    <li>
                                        <button type="submit"  class="btn btn-style1">Update profile</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
    @stop

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnrM9ISkivX_c_h82WzlOx-REJHnQLKQ&callback=initMap"async defer></script>
    <script>

        function showMap(event) {
            event.preventDefault(); // prevent page refresh
            document.getElementById("map").style.display = "block";

            // Retrieve the user's address and governorates from input fields
            //var address = document.getElementById('address').value;
            var governorateDropdown = document.getElementById('governorates');
            var governorates = governorateDropdown.options[governorateDropdown.selectedIndex].id;


            //console.log(address);
            console.log(governorates);

            // Send a geocoding request to Nominatim API
            var url =
                "https://nominatim.openstreetmap.org/search?format=json&limit=1&q=" +
                encodeURIComponent(governorates) +
                "&accept-language=ar";
            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    if (data.length > 0) {
                        console.log(data[0])
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
                        }, {passive: true});

                        // Update the latitude and longitude inputs with the initial coordinates
                        document.getElementById("latitude").value = latitude;
                        document.getElementById("longitude").value = longitude;



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
                            var addressInput = document.getElementById("bran_address_ar");
                            addressInput.value = addressResult;
                        }, {passive: true});


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
                                }, {passive: true})
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
@endpush
