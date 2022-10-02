<?php

namespace App\Solid\OCP_Refactored;

use http\Exception;

interface IPayment
{
    public function pay(): string;
}
