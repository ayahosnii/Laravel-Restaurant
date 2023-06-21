<div class="grid-list-select">
    <ul class="grid-list">
        <a href="{{route('restaurant.all')}}" class="btn btn-warning">All restaurant</a>
    </ul>
    <ul class="grid-list-selector">
        <li>
            <label>Sort by</label>
            <select wire:model="sorting">
                <option>Featured</option>
                <option>Best selling</option>
                <option value="alphabet">Alphabetically, A-Z</option>
                <option value="alphabet-desc">Alphabetically, Z-A</option>
                <option value="price">Price, low to high</option>
                <option value="price-desc">Price, high to low</option>
                <option value="date-desc">Date new to old</option>
                <option value="date">Date old to new</option>
            </select>
        </li>
    </ul>
</div>
