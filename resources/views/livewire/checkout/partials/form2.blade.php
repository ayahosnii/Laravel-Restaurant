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
