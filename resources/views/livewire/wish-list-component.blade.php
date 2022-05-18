<div>
    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="https://spacingtech.com/html/vegist-final/vegist/index1.html">Home</a></li>
                                <li class="about-p"><span>Wishlist</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order history start -->
    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <div class="order-pro">
                                <div class="pro-img">
                                    <a href="javascript:void(0)"><img src="./wishlist_files/user-ava.jpg" alt="img" class="img-fluid"></a>
                                </div>
                                <div class="order-name">
                                    <h4>{{Auth::user() -> name}}</h4>
                                    <span>Joined {{Auth::user() -> created_at}}</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/order-history.html"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/profile.html">Profile</a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html">Address</a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-wishlist.html" class="active"><span>Wishlist</span> <span class="pro-count">{{Cart::instance('wishlist')->count()}}</span></a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-tickets.html"><span>My tickets</span> <span class="pro-count">4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        @if(Cart::instance('wishlist')->content()->count() > 0)
                        <div class="profile-wishlist">
                            <div class="wishlist-area">
                                <div class="wishlist-details">
                                    <div class="wishlist-item">
                                        <span class="wishlist-head">My wishlist:</span>
                                        <span class="wishlist-items">{{Cart::instance('wishlist')->content()->count()}} item</span>
                                    </div>
                                </div>
                            @foreach(Cart::instance('wishlist')->content() as $item)
                            <div class="wishlist-area">
                                <div class="wishlist-details">
                                    <div class="wishlist-all-pro">
                                        <div class="wishlist-pro">
                                            <div class="wishlist-pro-image">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html"><img src="{{$item->model->image}}" style="width: 200px; height: 200px" class="img-fluid" alt="image"></a>
                                            </div>
                                            <div class="pro-details">
                                                <h4><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$item->name}}</a></h4>
                                                <span class="all-size">Quantity: <span class="pro-size">{{$item->model->quantity}}kg</span></span>
                                            </div>
                                        </div>
                                        <div class="qty-item">
                                            <a href="#" class="add-wishlist" wire:click.prevent="moveProductFromWishlistToCart({{$item->rowId}})">Add to cart</a>
                                            <a href="#" class="add-wishlist">Buy now</a>
                                            <a href="#" class="add-wishlist" wire:click.prevent="removeFromWishList({{$item->model->id}})">Delete</a>
                                        </div>
                                        <div class="all-pro-price">
                                            <span class="new-price">£{{$item->model->sale_price}} LE</span>
                                            <span class="old-price"><del>£{{$item->model->regular_price}} LE</del></span>
                                            <span><i class="ion-android-close"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
