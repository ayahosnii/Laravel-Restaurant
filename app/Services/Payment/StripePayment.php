<?php

namespace App\Services\Payment;

use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripePayment extends PaymentManager
{
    public function createPaymentIntent()
    {
        //
    }
}
