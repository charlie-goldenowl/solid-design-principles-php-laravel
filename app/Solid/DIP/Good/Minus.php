<?php

namespace App\Solid\DIP\Good;

class Minus implements ICalculationOperator
{
    public function calculate(float $x, float $y): float
    {
        return $x + $y;
    }
}
