<?php

namespace Tests\Feature;

use App\Models\providers\Meal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Traits\CartTrait;

class CartTraitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAddToCart()
    {
      /*  $meal = Meal::factory()->create();

        $cartTrait = new CartTrait();
        $cartTrait->addToCart($meal);

        $this->assertTrue($cartTrait->cart->contains($meal));*/
    }
}
