<?php

namespace App\Solid\OCP_Refactored;

interface IPayment
{
    public function pay(): string;
}
