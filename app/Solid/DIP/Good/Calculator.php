<?php

namespace App\Solid\DIP\Good;

class Calculator
{
    public function __construct(public ICalculationOperator $cal)
    {
    }

    public function calculate(float $x, float $y ) : float
    {
        return $this->cal->calculate($x, $y);
    }
}
