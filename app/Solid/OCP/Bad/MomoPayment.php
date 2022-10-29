<?php

namespace App\Solid\OCP\Bad;

class MomoPayment
{
    const PAYMENT_NAME = "MOMO";

    public function pay()
    {
        echo sprintf("paid by %s discount %d", self::PAYMENT_NAME, 10);
    }
}
