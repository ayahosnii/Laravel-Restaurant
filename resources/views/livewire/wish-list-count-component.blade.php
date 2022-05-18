<div>
    <li class="side-wrap wishlist-wrap">
        <a href="{{route('wishlist')}}" class="header-wishlist">
            <span class="wishlist-icon"><i class="fa-regular fa-heart"></i></span>
            @if(Cart::instance('wishlist')->count() > 0)
            <span class="wishlist-counter">{{Cart::instance('wishlist')->count()}}</span>
            @else
            <span class="wishlist-counter">0</span>
            @endif
        </a>
    </li>
</div>
