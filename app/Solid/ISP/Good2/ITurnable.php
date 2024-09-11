<?php

namespace App\Solid\ISP\Good2;

/**
 * Interface for objects that can turn.
 */
interface ITurnable
{
    /**
     * Turn the object to the left.
     */
    function TurnLeft(): void;

    /**
     * Turn the object to the right.
     */
    function TurnRight(): void;
}
