<?php

namespace App\Solid\OCP\Good;

class PaypalPayment implements IPayment
{
    const PAYMENT_NAME = "Paypal";

    public function pay():  string
    {
        return sprintf("paid by %s discount %d", self::PAYMENT_NAME, 5);
    }
}
