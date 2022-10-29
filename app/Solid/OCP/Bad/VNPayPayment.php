<?php

namespace App\Solid\OCP\Bad;

class VNPayPayment
{
    const PAYMENT_NAME = "VNPay";
    public function pay()
    {
        echo sprintf("paid by %s discount %d",self::PAYMENT_NAME, 5);
    }
}
