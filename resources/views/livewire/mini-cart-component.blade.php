<div class="mini-cart">
    <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
    @if(Cart::instance('cart')->count() > 0)
    <div class="cart-item-title">
        <p>
            <span class="cart-count-desc">There are</span>
            <span class="cart-count-item bigcounter">{{Cart::instance('cart')->count()}}</span>
            <span class="cart-count-desc">Products</span>
        </p>
    </div>
    <ul class="cart-item-loop">
        @foreach(Cart::instance('cart')->content() as $item)
        <li class="cart-item">
            <div class="cart-img">
                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                    <img src="{{$item->model->image}}" alt="{{$item->name}}" class="img-fluid">
                </a>
            </div>
            <div class="cart-title">
                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh apple 5kg</a></h6>
                <div class="cart-pro-info">
                    <div class="cart-qty-price">
                        <span class="price-box">£{{$item->model->sale_price}}</span>
                    </div>
                    <div class="delete-item-cart">
                        <a href="https://spacingtech.com/html/vegist-final/vegist/empty-cart.html"><i class="icon-trash icons"></i></a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <ul class="subtotal-title-area">
        <li class="subtotal-info">
            <div class="subtotal-titles">
                <h6>Sub total:</h6>
                <span class="subtotal-price">${{$item->subtotal}}</span>
            </div>
        </li>
        <li class="mini-cart-btns">
            <div class="cart-btns">
                <a href="/cart" class="btn btn-style2">View cart</a>
                <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-1.html" class="btn btn-style2">checkout</a>
            </div>
        </li>
    </ul>
</div>
@else
    <div class="cart-item-title">
        <p>
            <span class="cart-count-desc">There are</span>
            <span class="cart-count-item bigcounter">0</span>
            <span class="cart-count-desc">Products</span>
        </p>
    </div>
    <ul class="cart-item-loop">
            <li class="cart-item">
                <div class="cart-title">
                    <strong>No item here</strong>
                </div>

            </li>
    </ul>
    <ul class="subtotal-title-area">
        <li class="subtotal-info">
            <div class="subtotal-titles">
                <h6>Sub total:</h6>
                <span class="subtotal-price">£0</span>
            </div>
        </li>
        <li class="mini-cart-btns">
            <div class="cart-btns">
                <a href="/cart" class="btn btn-style2">View cart</a>
                <a href="https://spacingtech.com/html/vegist-final/vegist/checkout-1.html" class="btn btn-style2">checkout</a>
            </div>
        </li>
    </ul>
    </div>
@endif
