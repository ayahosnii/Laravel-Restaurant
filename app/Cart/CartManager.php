<?php

namespace App\Cart;

use App\Contracts\CartManagerContract;
use App\Models\providers\Meal;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class CartManager implements CartManagerContract
{
    public function addToCart($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('cart')->add($meal_id, $meal_name, 1, $meal_price)->associate(Meal::class);
        Session()->flash('success_message', 'Item added to Cart');
    }

    public function addToWishList($meal_id, $meal_name, $meal_price)
    {
        Cart::instance('wishlist')->add($meal_id, $meal_name, 1, $meal_price)->associate(Meal::class);
    }

    public function removeFromWishList($meal_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $meal_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                return;
            }
        }
    }
}
