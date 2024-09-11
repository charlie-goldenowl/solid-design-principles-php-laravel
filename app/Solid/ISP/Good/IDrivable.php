<?php

namespace App\Solid\ISP\Good;

/**
 * Interface for objects that can be driven.
 */
interface IDrivable
{
    /**
     * Move the object forward.
     */
    function GoForward(): void;

    /**
     * Move the object backward.
     */
    function GoBackward(): void;
}
