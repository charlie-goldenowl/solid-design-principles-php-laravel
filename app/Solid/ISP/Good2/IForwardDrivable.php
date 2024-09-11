<?php

namespace App\Solid\ISP\Good2;

/**
 * Interface for objects that can move forward.
 */
interface IForwardDrivable
{
    /**
     * Move the object forward.
     */
    function GoForward(): void;
}
