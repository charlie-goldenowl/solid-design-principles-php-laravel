<?php

use App\Solid\ISP\Good2\Car;
use App\Solid\ISP\Good2\Train;

// Create an instance of Car
$car = new Car();
echo "Testing Car:\n";
$car->GoForward();   // Output: Car going forward.
$car->GoBackward();  // Output: Car going backward.
$car->TurnLeft();    // Output: Car turns left.
$car->TurnRight();   // Output: Car turns right.

// Create an instance of Train
$train = new Train();
echo "\nTesting Train:\n";
$train->GoForward();   // Output: Train going forward.
