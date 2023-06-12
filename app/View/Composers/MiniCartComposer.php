<?php

namespace App\View\Composers;

use App\Cart\Basket;
use App\Models\admin\Product;
use App\Models\providers\ProviderRegister;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class MiniCartComposer
{
    protected $basket;
    protected $id;

    /**
     * Create a new CartController instance.
     *
     * @param Basket $basket
     * @param Product $product
     */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
     * Show all items in the Basket.
     *
     */



    public function compose(View $view)
    {
        $view->with('product', $basket = $this -> basket);
    }

}
