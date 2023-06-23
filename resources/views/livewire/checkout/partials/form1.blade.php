    <ul class="billing-ul input-2">
        <li class="billing-li">
            <input type="text" name="firstname" placeholder="First name" value="{{ $user->name ?? '' }}" wire:model="firstname" >
            @error('firstname') <span class="error">{{ $message }}</span> @enderror
        </li>
        <li class="billing-li">
            <input type="text" name="lastname" placeholder="Last name" wire:model="lastname" >
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
        <p>
            Latitude: <span id="lati"></span>
        </p>
        <p>
            Longitude: <span id="longi"></span>
        </p>

        <input type="text" name="latitude" placeholder="Latitude" wire:model="latitude">
        @error('latitude') <span class="error">{{ $message }}</span> @enderror
        <input type="text"  name="longitude" placeholder="Longitude" wire:model="longitude">
        @error('longitude') <span class="error">{{ $message }}</span> @enderror
        <p id="address-display"></p>
        <button id="add-address-btn" type="button">Add Address</button>
    </ul>
