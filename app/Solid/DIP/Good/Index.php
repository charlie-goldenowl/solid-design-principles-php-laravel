<?php

use App\Solid\DIP\Good\Add;
use App\Solid\DIP\Good\Minus;
use App\Solid\DIP\Good\Multiple;
use App\Solid\DIP\Good\Calculator;

$calculator = new Calculator(new Add());
$result = $calculator->calculate(10, 5);
echo "Addition Result: $result\n"; // 15

$calculator = new Calculator(new Minus());
$result = $calculator->calculate(10, 5);
echo "Subtraction Result: $result\n"; // 5

$calculator = new Calculator(new Multiple());
$result = $calculator->calculate(10, 5);
echo "Multiplication Result: $result\n"; // 50
