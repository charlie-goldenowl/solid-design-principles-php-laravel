<?php

namespace App\Solid\ISP\Good;

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
