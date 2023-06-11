<?php

namespace App\Traits;

use Gloudemans\Shoppingcart\Facades\Cart;
use Session;

trait CartTrait
{
    public function addToCartTrait($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('cart')->add($meal_id, $meal_name, 1, $meal_price)->associate('App\Models\providers\Meal');
        Session()->flash('success_message', 'Item added to Cart');
    }

    public function addToWishListTrait($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('wishlist')->add($meal_id, $meal_name, 1, $meal_price)->associate('App\Models\providers\Meal');
        $this->emitTo('wish-list-count-component', 'refreshComponent');
    }

    public function removeFromWishListTrait($meal_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $meal_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-count-component', 'refreshComponent');
                return;
            }
        }
    }
}
