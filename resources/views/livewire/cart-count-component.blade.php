<li class="side-wrap cart-wrap">
    <div class="shopping-widget">
        <div class="shopping-cart">
            <a href="javascript:void(0)" class="cart-count">
                  <span class="cart-icon-wrap">
                         <span class="cart-icon"><i class="fa-solid fa-bag-shopping"></i></span>
                      @if(Cart::instance('cart')->count() > 0)
                        <span id="cart-total" class="bigcounter">{{Cart::instance('cart')->count()}}</span>
                      @else
                         <span id="cart-total" class="bigcounter">0</span>
                      @endif
                   </span>
            </a>
        </div>
    </div>
</li>
