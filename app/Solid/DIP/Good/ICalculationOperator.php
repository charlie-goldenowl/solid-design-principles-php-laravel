<?php

namespace App\Solid\DIP\Good;

interface ICalculationOperator
{
    public function calculate(float $x, float $y) :float;
}
