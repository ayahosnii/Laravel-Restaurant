<div class="all-filter">
    <div class="categories-page-filter">
        <h4 class="filter-title">Categories</h4>
        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
        <ul class="all-option collapse" id="category-filter">
            @foreach($categories as $category)
                <li class="grid-list-option">
                    <input type="checkbox" wire:model="categoryInputs" value="{{$category->id}}">
                    <a href="javascript:void(0)">{{$category->name}} <span class="grid-items"></span></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
