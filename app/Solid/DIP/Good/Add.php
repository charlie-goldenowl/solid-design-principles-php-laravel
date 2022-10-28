<?php

namespace App\Solid\DIP\Good;

class Add implements ICalculationOperator
{
    public function calculate(float $x, float $y): float
    {
        return $x + $y;
    }
}
