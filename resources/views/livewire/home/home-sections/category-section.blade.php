<section class="category-img1 section-t-padding section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Shop by category</h2>
                </div>
                <div class="home-category owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1407px, 0px, 0px); transition: all 0.25s ease 0s; width: 4221px;">
                            @foreach($categories as $category)
                                <div class="owl-item cloned" style="width: 171px; margin-right: 30px;"><div class="items">
                                        <div class="h-cate">
                                            <div class="c-img">
                                                <a href="{{ route('main-category.index',['main_category_slug'=>  $category->slug]) }}" class="home-cate-img">
                                                    <img class="img-fluid" src="{{asset($category->photo)}}" alt="cate-image" style="height: 90px; width: 90px">
                                                    <span class="cat-title">{{$category->name}}</span>
                                                </a>
                                            </div>
                                            <span class="cat-num">19 Items</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                            <i class="fa fa-angle-left"></i>
                        </button><button type="button" role="presentation" class="owl-next">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="owl-dots disabled">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
