<?php

namespace App\Solid\OCP_Violation;

class MomoPayment
{
    const PAYMENT_NAME = "MOMO";

    public function pay():  string
    {
        return sprintf("paid by %s discount %d", self::PAYMENT_NAME, 10);
    }
}
