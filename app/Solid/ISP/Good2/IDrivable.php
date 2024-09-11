<?php

namespace App\Solid\ISP\Good2;

/**
 * @deprecated deprecated since version 1.0
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
