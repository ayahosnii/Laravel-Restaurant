<div class="categories-page-filter" style="overflow-y: scroll;">
    <h4 class="filter-title">Filter by providers</h4>
    <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
    <ul class="all-option collapse" id="vendor">
        @foreach($providers as $provider)
            <li class="grid-list-option">
                <input type="checkbox" wire:model="filterProviders" value="{{$provider->id}}">
                <a href="javascript:void(0)">{{$provider->name}} <span class="grid-items"></span></a>
            </li>
        @endforeach
    </ul>
</div>
