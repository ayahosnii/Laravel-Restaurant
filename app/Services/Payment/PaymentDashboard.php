<?php

namespace App\Services\Payment;

class PaymentDashboard
{
    private $payment;

    public function __construct(IPayment $payment)
    {
        $this->setPayment($payment);
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment(IPayment $payment): void
    {
        $this->payment = $payment;
    }

    public function createPaymentIntent()
    {
        return $this->payment->createPaymentIntent();
    }

}
