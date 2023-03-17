@push('style')
    <style>
        .sb-price {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sb-price sub {
            margin-bottom: 10px;
        }
    </style>

        @endpush
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
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
                    <div class="categories-page-filter" style="overflow-y: scroll;">
                        <h4 class="filter-title">Filter by providers</h4>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
                        <ul class="all-option collapse" id="vendor">
                            @foreach($providers as $provider)
                                <li class="grid-list-option">
                                    <input type="checkbox" wire:model="filterProviders"  value="{{$provider->id}}">
                                    <a href="javascript:void(0)">{{$provider->name}} <span class="grid-items"></span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="price-filter">
                        <div class="sidebar-widget price_range range">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Filter by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"  wire:model="price_range" wire:change="filterByPrice($event.target.value)" wire:ignore></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><span class="text-warning">{{$min_price}} LE</span> - <span class="text-warning">{{$max_price}} LE</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="filter-tag">
                        <h4 class="filter-title">Filter by tags</h4>
                        <a href="" data-bs-toggle="collapse" class="filter-link"><span>Filter by tags </span><i class="fa fa-angle-down"></i></a>

                        <ul class="all-tag collapse" id="tags-filter">
                            @foreach($categories as $category)
                                <li class="tag"><a href="{{route('main_category_slug',['main-category.index'=>$category->slug])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-banner">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="grid-banner">
                            <img src="./grid-list_files/grid-banner.jpg" class="img-fluid" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="grid-list-banner" style="background-image: url({{asset('assets/img/slider17.jpg')}});">
                    <div class="grid-banner-content">
                        <h4>this page is using livewire</h4>
                        <a href="{{route('restaurant.ajax')}}">Go to ajax page <i class="fa-solid fa-link"></i></a></div>
                </div>
                <div class="grid-list-area">
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
                                    <option value="alphabet">Alphabetically,A-Z</option>
                                    <option value="alphabet-desc">Alphabetically,Z-A</option>
                                    <option value="price">Price, low to high</option>
                                    <option value="price-desc">Price, high to low</option>
                                    <option value="date-desc">Date new to old</option>
                                    <option value="date">Date old to new</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="grid-pro">
                        <ul class="grid-product">
                            @isset($meals)
                            @foreach($meals as $meal)
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{route('meal.details',['name'=>$meal->name])}}">
                                                <img class="img-fluid" style="height: 300px; width: 500px"  src="{{asset($meal->image)}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" style="height: 300px; width: 500px" src="{{asset($meal->image)}}" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="{{route('meal.details', ['name'=>$meal->name])}}" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $meal->id}}"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="w-c-q-icn" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')"><i class="fa fa-heart"></i></a>
                                            <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                    <div class="caption">
                                        <a href="{{route('meal.details',['name'=>$meal->name])}})}}" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                                            <div class="sb-card-tp">
                                                <h4 class="sb-card-title">{{ $meal->name }} / {{ $meal->provider->name }}</h4>
                                                @if ($meal->sales->isNotEmpty())
                                                    <div class="sb-price">
                                                        <sub class="original-price">
                                                            <strike>£{{ number_format($meal->price, 2) }}</strike>

                                                        </sub>
                                                        <br>
                                                        <sub class="discounted-price">
                                                           <strong style="font-size: 13px"> £{{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }}</strong>
                                                        </sub>

                                                    </div>
                                                @else
                                                    <div class="sb-price"><sub>
                                                            <strong style="font-size: 13px">
                                                                £{{ number_format($meal->price, 2) }}
                                                            </strong>
                                                        </sub>
                                                    </div>

                                                @endif
                                            </div>

                                        </a>
                                    </div>
                                </li>
                            @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
                <div class="list-all-page">
                    <span class="page-title">Showing 1 - 17 of 17 result</span>
                    <div class="page-number">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="active">1</a>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list-2.html">2</a>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list-3.html">3</a>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list-4.html">4</a>
                        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($meals as $meal)
        <section class="quick-view">
            <div class="modal fade" id="exampleModal{{ $meal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                            <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                        </div>
                        <div class="quick-veiw-area">
                            <div class="quick-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-1">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="{{$meal->image}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">








                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-1"><img src="./products_files/image1.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-2"><img src="./products_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-3"><img src="./products_files/image3.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-4"><img src="./products_files/image4.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-5"><img src="./products_files/image5.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-6"><img src="./products_files/image6.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-7"><img src="./products_files/image8.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-8"><img src="./products_files/image7.jpg" class="img-fluid" alt="image"></a>
                                                </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
                            </div>
                            <div class="quick-caption">
                                <h4>{{$meal->name}}</h4>
                                <div class="quick-price">
                                    @if ($meal->sales->isNotEmpty())
                                    <span class="new-price">
                                        {{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }} LE</span>
                                    <span class="old-price">
                                        <strike>£{{ number_format($meal->price, 2) }}</strike>
                                    </span>
                                    @else
                                        <span class="new-price">
                                        {{ number_format($meal->price, 2) }}
                                        </span>
                                    @endif
                                </div>
                                <div class="quick-rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-description">
                                    <p>{{$meal->description}}</p>
                                </div>
                                <div class="pro-size">
                                    <label>Size: </label>
                                    <select>
                                        <option>1 ltr</option>
                                        <option>3 ltr</option>
                                        <option>5 ltr</option>
                                    </select>
                                </div>
                                <div class="plus-minus">
                                <span>
                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                    <input type="text" name="name" value="1">
                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                </span>
                                    <a href=#" class="quick-cart" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="#" class="quick-wishlist" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

</section>

@push('scripts')
    <script>
        var sliderrange = $('#slider-range');
        var amountprice = $('#amount');
        $(function() {
            sliderrange.slider({
                range: true,
                min: 16,
                max: 400,
                values: [0, 300],
                slide: function(event, ui) {
                    amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
                    @this.set('min_price',ui.values[0]);
                    @this.set('max_price',ui.values[1]);
                }
            });
        });
    </script>
@endpush
