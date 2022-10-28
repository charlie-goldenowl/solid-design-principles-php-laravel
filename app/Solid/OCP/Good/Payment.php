<?php

namespace App\Solid\OCP\Good;

class Payment
{
    public function __construct(public IPayment $payment)
    {
    }
    public function pay(): string|\Exception
    {
        return $this->payment->pay();
    }
}
