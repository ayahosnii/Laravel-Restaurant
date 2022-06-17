<?php

namespace App\View\Composers;

use App\Basket\Basket;
use Illuminate\View\View;


class CartComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Basket\Basket
     */
    protected $basket;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Basket\Basket  $basket
     * @return void
     */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('basket', $basket = $this -> basket);
    }
}
