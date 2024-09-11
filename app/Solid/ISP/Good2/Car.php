<?php

namespace App\Solid\ISP\Good2;

/**
 * Class representing a car which can drive forward, backward, and turn.
 */
class Car implements IForwardDrivable, IBackwardDrivable, ITurnable
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
