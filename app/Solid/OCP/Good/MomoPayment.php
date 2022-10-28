<?php

namespace App\Solid\OCP\Good;

class MomoPayment implements IPayment
{
    const PAYMENT_NAME = "MOMO";

    public function pay(): string
    {
        return sprintf("paid by %s discount %d", self::PAYMENT_NAME, 10);
    }
}
