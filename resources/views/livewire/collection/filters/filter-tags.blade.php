<div class="filter-tag">
    <h4 class="filter-title">Tags</h4>
    <a href="" data-bs-toggle="collapse" class="filter-link"><span>Tags </span><i class="fa fa-angle-down"></i></a>

    <ul class="all-tag collapse" id="tags-filter">
        @foreach($categories as $category)
            <li class="tag"><a href="{{route('main-category.index',['main_category_slug'=>$category->slug])}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
</div>
