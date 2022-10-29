<?php

namespace App\Solid\OCP\Bad;

class PaypalPayment
{
    const PAYMENT_NAME = "Paypal";

    public function pay()
    {
        echo sprintf("paid by %s discount %d", self::PAYMENT_NAME, 5);
    }
}
