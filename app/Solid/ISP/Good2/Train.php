<?php

namespace App\Solid\ISP\Good2;

/**
 * Class representing a train which can move forward but cannot turn.
 */
class Train implements IForwardDrivable
{
    /**
     * Move the train forward.
     */
    function GoForward(): void
    {
        echo "Train going forward. \r\n";
    }
}
