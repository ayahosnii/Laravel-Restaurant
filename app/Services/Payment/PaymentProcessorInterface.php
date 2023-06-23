<?php

namespace App\Services\Payment;

interface PaymentProcessorInterface
{
    public function createPaymentIntent();

}
