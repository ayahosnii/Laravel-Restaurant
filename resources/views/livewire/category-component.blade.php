<div><section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="https://spacingtech.com/html/vegist-final/vegist/index1.html">Home</a></li>
                                <li class="about-p"><span>Collection</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- grid-list start -->
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
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">{{$category->name}} <span class="grid-items">(4)</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                <li class="f-price">
                                    <input type="checkbox">
                                    <label>0-100</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox">
                                    <label>100-200</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox">
                                    <label>200-300</label>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-size">
                            <h4 class="filter-title">Filter by size</h4>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#size-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by size </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-size collapse" id="size-filter">
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>10kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>10ltr</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>1kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>1ltr</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>2kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>3kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>5kg</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox">
                                    <label>5ltr</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-tag">
                            <h4 class="filter-title">Filter by tags</h4>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#tags-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by tags </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-tag collapse" id="tags-filter">
                                <li class="category-item">
                            @foreach($categories as $category)
                                    <li class="tag"><a href="{{ route('product.category',['category_slug'=>  $category->slug]) }}l">{{$category->name}}</a></li>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        <div class="vendor-filter">
                            <h4 class="filter-title">Filter by vendor</h4>
                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#vendor" data-bs-toggle="collapse" class="filter-link"><span>Filter by vendor </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-vendor collapse" id="vendor">
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Fargglad</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Flisat</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Kyrre</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Lustigt</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Sundvik</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-banner">
                            <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="grid-banner">
                                <img src="./products_files/grid-banner.jpg" class="img-fluid" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="grid-list-banner" style="background-image: url(image/slider17.jpg);">
                        <div class="grid-banner-content">
                            <h4>Bestseller</h4>
                            <p>Praesent dapibus, neque id cursus Ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, facilisis luc...</p>
                        </div>
                    </div>
                    <div class="grid-list-area">
                        <div class="grid-list-select">
                            <ul class="grid-list">
                                <li class="colloction-icn"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list-2.html"><i class="ti-layout-list-thumb"></i></a></li>
                                <li class="colloction-icn"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list-3.html"><i class="ti-layout-grid2"></i></a></li>
                                <li class="colloction-icn three-grid"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html" class="active"><i class="ti-layout-grid3"></i></a></li>
                                <li class="colloction-icn four-grid"><a href="https://spacingtech.com/html/vegist-final/vegist/grid-list-4.html"><i class="ti-layout-grid4"></i></a></li>
                            </ul>
                            <ul class="grid-list-selector">
                                <li>
                                    <label>Sort by</label>
                                    <select>
                                        <option>Featured</option>
                                        <option>Best selling</option>
                                        <option>Alphabetically,A-Z</option>
                                        <option>Alphabetically,Z-A</option>
                                        <option>Price, low to high</option>
                                        <option>Price, high to low</option>
                                        <option>Date new to old</option>
                                        <option>Date old to new</option>
                                    </select>
                                </li>
                            </ul>
                        </div>


                        <div class="grid-pro">
                            <ul class="grid-product">

                                @foreach($products as $product)
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{route('product.details', $product->slug)}}">
                                                <img class="img-fluid" style="height: 300px; width: 500px" src="{{$product->image}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" style="height: 300px; width: 500px" src="{{$product->image}}" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="addToWishlist w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{route('product.details', $product->slug)}}">{{$product->name}}</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">{{$product->sale_price}} LE</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                                @if(isset($meals))
                                    @foreach($meals as $meal)
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                <img class="img-fluid" style="height: 300px; width: 500px" src="{{asset($meal->image)}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" style="height: 300px; width: 500px" src="{{asset($meal->image)}}" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="https://spacingtech.com/html/vegist-final/vegist/cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><b><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$meal->name}}</a></b></h3>
                                        @if ($meal->branch)
                                        <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$meal->provider->name}}</a></h3>
                                        @endif

                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">{{$meal->price}} LE</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                               @endif
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
    </section>
    <!-- grid-list start -->
    <!-- quick veiw start -->
    @foreach($products as $product)
    <section class="quick-view">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <img src="{{$product->image}}" class="img-fluid" alt="image">
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
                            <h4>{{$product->name}}</h4>
                            <div class="quick-price">
                                <span class="new-price">{{$product->sale_price}} LE</span>
                                <span class="old-price"><del>{{$product->regular_price}} LE</del></span>
                            </div>
                            <div class="quick-rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-description">
                                <p>{{$product->description}}</p>
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
                                <a href=#" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="quick-wishlist addToWishlist" data-product-id="{{$product -> id}}"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
    @section('scripts')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.addToWishlist', function (e) {
                e.preventDefault();
                @guest()
                $('.w-c-q-icn').css('display','block');
                @endguest
                $.ajax({
                    type: 'post',
                    url: "{{Route('wishlist.store')}}",
                    data: {
                        'productId': $(this).attr('data-product-id'),
                    },
                    success: function (data) {
                        if(data.wished )
                            $('.alert-modal').css('display','block');
                        else
                            $('.alert-modal2').css('display','block');
                    }
                });
            });
            $(document).on('click', '.cart-addition', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: "{{Route('site.cart.add')}}",
                    data: {
                        'product_id': $(this).attr('data-product-id'),
                        'product_slug' : $(this).attr('data-product-slug'),
                    },
                    success: function (data) {
                    }
                });
            });
        </script>

@stop
