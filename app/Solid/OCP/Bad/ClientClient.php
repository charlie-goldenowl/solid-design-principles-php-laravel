<?php

namespace App\Solid\OCP\Bad;

class ClientClient
{
    public function pay()
    {
        $payment = new Payment();
        $payment->payNow(MomoPayment::PAYMENT_NAME);
    }
}
