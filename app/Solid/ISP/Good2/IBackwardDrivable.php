<?php

namespace App\Solid\ISP\Good2;

/**
 * Interface for objects that can move backward.
 */
interface IBackwardDrivable
{
    /**
     * Move the object backward.
     */
    function GoBackward(): void;
}
