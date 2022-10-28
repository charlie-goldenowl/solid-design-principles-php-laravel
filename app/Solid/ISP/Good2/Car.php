<?php

namespace App\Solid\ISP\Good2;

class Car implements ITurnable, IForwardDrivable, IBackwardDrivable
{
    function GoForward(): void
    {
       echo "Car going forward. \r\n";
    }

    function GoBackward(): void
    {
        echo "Car going backward. \r\n";
    }

    function TurnLeft(): void
    {
        echo "Car going turns left. \r\n";
    }

    function TurnRight(): void
    {
        echo "Car going turns right.. \r\n";
    }
}
