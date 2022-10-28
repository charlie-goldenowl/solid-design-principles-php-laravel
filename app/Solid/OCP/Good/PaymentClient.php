<?php

namespace App\Solid\OCP\Good;

class PaymentClient
{
    public function payNow(): void
    {
        $momo = new MomoPayment();
        $payment = new Payment($momo);
        $payment->pay();
    }
}
