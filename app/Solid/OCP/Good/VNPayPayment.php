<?php

namespace App\Solid\OCP\Good;

class VNPayPayment implements IPayment
{
    const PAYMENT_NAME = "VNPay";
    public function pay() :  string
    {
        return sprintf("paid by %s discount %d",self::PAYMENT_NAME, 5);
    }
}
