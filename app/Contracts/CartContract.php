<?php

namespace App\Contracts;

interface CartContract
{
    public function addToCart($meal_id, $meal_name, $meal_price);
    public function addToWishList($meal_id, $meal_name, $meal_price);
    public function removeFromWishList($meal_id);
}
