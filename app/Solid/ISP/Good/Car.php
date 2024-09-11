<?php

namespace App\Solid\ISP\Good;

/**
 * Class representing a car which can both drive and turn.
 */
class Car implements ITurnable, IDrivable
{
    /**
     * Move the car forward.
     */
    function GoForward(): void
    {
        echo "Car going forward. \r\n";
    }

    /**
     * Move the car backward.
     */
    function GoBackward(): void
    {
        echo "Car going backward. \r\n";
    }

    /**
     * Turn the car to the left.
     */
    function TurnLeft(): void
    {
        echo "Car turns left. \r\n";
    }

    /**
     * Turn the car to the right.
     */
    function TurnRight(): void
    {
        echo "Car turns right. \r\n";
    }
}
