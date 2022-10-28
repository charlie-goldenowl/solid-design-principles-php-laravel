<?php

namespace App\Solid\DIP\Bad;

class Calculator
{
    public function Add(float $x, float $y) : float
    {
        return $x + $y;
    }

    public function Minus(float $x, float $y) : float
    {
        return $x - $y;
    }

    // what happen if we want to add more method ex: Multiply?
}
