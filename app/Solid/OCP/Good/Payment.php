<?php

namespace App\Solid\OCP\Good;

class Payment
{
    public function __construct(public IPayment $payment)
    {
    }
    public function pay()
    {
        echo $this->payment->pay();
    }
}
