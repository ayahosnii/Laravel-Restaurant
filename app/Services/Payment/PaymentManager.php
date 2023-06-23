<?php

namespace App\Services\Payment;

class PaymentManager implements IPayment
{

    private $createPay;

    /**
     * @return mixed
     */
    public function getCreatePay() : PaymentProcessorInterface
    {
        return $this->createPay;
    }

    /**
     * @param mixed $createPay
     */
    public function setCreatePay(PaymentProcessorInterface $createPay): void
    {
        $this->createPay = $createPay;
    }
    public function createPaymentIntent()
    {
        return $this->getCreatePay()->createPaymentIntent();
    }
}
