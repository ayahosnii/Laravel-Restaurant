<?php

namespace App\Services\Payment;

use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripePayment extends PaymentManager
{
    public function createPaymentIntent()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        try {
            $intent = \Stripe\PaymentIntent::create([
                'amount' => Cart::instance('cart')->total() * 100,
                'currency' => 'usd',
            ]);
            $this->paymentIntentId = $intent->client_secret;
        } catch (ApiErrorException $e) {
            session()->flash('stripe_error', $e->getMessage());
        }
    }
}
