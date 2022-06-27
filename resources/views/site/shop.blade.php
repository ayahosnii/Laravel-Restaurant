@extends('layouts.base-vue')
@section('content')
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="all-filter">
                    <div class="categories-page-filter">
                        <h4 class="filter-title">Categories</h4>
                        <a href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
                        <ul class="all-option collapse" id="category-filter">
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)"> <span class="grid-items"></span></a>
                                </li>
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
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Almond</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Banana</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Bitrrot</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Blackberry</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Chikoo</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Coconet</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Guava</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">juice</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Ladiesfinger</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Litchi</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Minirrot</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Mussel</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Onion</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Organic-food</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Potato</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Shrimp</a></li>
                            <li class="tag"><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Tomato</a></li>
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
                            <img src="./grid-list_files/grid-banner.jpg" class="img-fluid" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="grid-list-banner" style="background-image: url({{asset('assets/img/slider17.jpg')}});">
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
                            @foreach($products as $product)
                            <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{route('product.details',$product -> slug)}}">
                                                <img class="img-fluid" style="height: 300px; width: 500px"  src="{{$product->image}}" alt="pro-img1">
                                                <img class="img-fluid additional-image" style="height: 300px; width: 500px" src="{{$product->image}}" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="#" id="addToWishlist" class="addToWishlist w-c-q-icn wishlistProd_22" data-product-id="{{$product -> id}}"><i class="fa fa-heart"></i></a>
                                           <form
                                                action=""
                                                method="post" class="formAddToCart" style="display: inline">
                                                @csrf
                                                <input type="hidden" name="id"
                                                       value="{{$product -> id}}">
                                            <a href="#" class="add-to-cart cart-addition w-c-q-icn" data-product-id="{{$product -> id}}" data-product-slug="{{$product -> slug}}" data-button-action="add-to-cart"><i class="fa fa-shopping-bag"></i></a>
                                           </form>
                                                <a href="#" id="quick-view" class="w-c-q-icn hidden-sm-down" data-product-id="{{$product -> id}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <a href="{{route('product.details',$product -> slug)}}" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                                            <div class="sb-card-tp">
                                                <h4 class="sb-card-title">{{$product->name}}</h4>
                                                <div class="sb-price"><sub>£{{$product->regular_price}}</sub> </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                                @foreach($meals as $meal)
                                    <li class="grid-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="{{route('meal.details',$meal -> name)}}">
                                                    <img class="img-fluid" style="height: 300px; width: 500px"  src="{{asset($meal->image)}}" alt="pro-img1">
                                                    <img class="img-fluid additional-image" style="height: 300px; width: 500px" src="{{$meal->image}}" alt="additional image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="#" id="addToWishlist" class="addToWishlist w-c-q-icn wishlistProd_22" data-product-id="{{$meal -> id}}"><i class="fa fa-heart"></i></a>
                                                <form
                                                    action=""
                                                    method="post" class="formAddToCart" style="display: inline">
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                           value="{{$meal -> id}}">
                                                    <a href="#" class="add-to-cart cart-addition w-c-q-icn" data-product-id="{{$meal -> id}}" data-product-slug="{{$meal -> slug}}" data-button-action="add-to-cart"><i class="fa fa-shopping-bag"></i></a>
                                                </form>
                                                <a href="#" id="quick-view" class="w-c-q-icn hidden-sm-down" data-product-id="{{$meal -> id}}" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <a href="{{route('meal.details',$meal -> name)}}" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                                                <div class="sb-card-tp">
                                                    <h4 class="sb-card-title">{{$meal->name}}</h4>
                                                    <div class="sb-price"><sub>£{{$meal->price}}</sub> </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
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
@include('site.quickview')
@include('site.includes.not-logged')
@include('site.includes.not-logged')
@include('site.includes.alert')   <!-- we can use only one with dynamic text -->
@include('site.includes.alert2')
</section>
@stop
@section('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#addToWishlist', function (e) {
            e.preventDefault();
            @guest()
            $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'post',
                url: "{{Route('wishlist.store')}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                /*success: function (data) {
                    if(data.wished) {
                        $('.alert-modal1').css('display', 'block');
                    }else {
                        $('.alert-modal2').css('display', 'block');
                    }
                }*/
            });
        });
        var completedIncrements =  [];
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
                    console.log(completedIncrements.indexOf(this.id));

                    if (completedIncrements.indexOf(this.class) == -1) {
                        var count = parseInt($(".bigcounter").text());
                        $(".bigcounter").html(count + 1);

                        completedIncrements.push(this.id);
                    }
                }
            });
        });
    </script>

@stop
