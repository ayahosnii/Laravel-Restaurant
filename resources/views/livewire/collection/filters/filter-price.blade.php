<div class="price-filter">
    <div class="sidebar-widget price_range range">
        <div class="widget-header position-relative mb-20 pb-10">
            <h5 class="widget-title mb-10">Filter by price</h5>
            <div class="bt-1 border-color-1"></div>
        </div>
        <div class="price-filter">
            <div class="price-filter-inner">
                <div id="slider-range" wire:model="price_range" wire:change="filterByPrice($event.target.value)" wire:ignore></div>
                <div class="price_slider_amount">
                    <div class="label-input">
                        <span>Range:</span><span class="text-warning">{{$min_price}} LE</span> - <span class="text-warning">{{$max_price}} LE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
