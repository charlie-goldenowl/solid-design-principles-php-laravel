<?php

namespace App\Solid\OCP\Bad;

class PaypalPayment
{
    const PAYMENT_NAME = "Paypal";

    public function pay():  string
    {
        return sprintf("paid by %s discount %d", self::PAYMENT_NAME, 5);
    }
}
