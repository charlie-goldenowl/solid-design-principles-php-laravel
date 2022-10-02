<?php

namespace App\Solid\OCP_Refactored;

class Payment
{
    public function process(IPayment $payment): string | \Exception
    {
        return $payment->pay();
    }
}
