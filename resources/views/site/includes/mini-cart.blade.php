<div class="mini-cart">
    <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
    @if($basket->all())
    <div class="cart-item-title">
        <p>
            <span class="cart-count-desc">There are</span>
            <span class="cart-count-item bigcounter">{{$basket  -> itemCount()}}</span>
            <span class="cart-count-desc">Products</span>
        </p>
    </div>
    <ul class="cart-item-loop">
        @foreach($basket->all() as $item)
        <li class="cart-item">
            <div class="cart-img">
                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                    <img src="{{$item->image}}" alt="{{$item->name}}" class="img-fluid">
                </a>
            </div>
            <div class="cart-title">
                <h6><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">Fresh apple 5kg</a></h6>
                <div class="cart-pro-info">
                    <div class="cart-qty-price">

                        @if(isset($item -> sale_price))
                            <span class="price-box">{{$item->sale_price}}£E</span>
                        @else
                            <span class="price-box">{{$item->regular_price}}£E</span>
                        @endif

                    </div>
                    <div class="delete-item-cart">
                        <a class="remove-from-cart sb-remove" onclick="$(this).closest('.cart-item').remove()"
                           rel="nofollow"
                           data-link-action="delete-from-cart"
                           data-id-product="{{$item -> id}}"
                           data-url-product="{{route('site.cart.update',$item -> slug)}}"
                           data-id-customization=""><i class="fa-solid fa-trash"></i></a>
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
            <span class="cart-count-item bigcounter">{{$basket  -> itemCount()}}</span>
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
                <span class="subtotal-price">{{$basket  -> itemCount()}}£E</span>
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


{{--
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: $(this).attr('data-url-product'),
                data: {
                    'product_id': $(this).attr('data-id-product'),
                },
                success: function (data) {
                }
            });
        });
    </script>
@stop
--}}
