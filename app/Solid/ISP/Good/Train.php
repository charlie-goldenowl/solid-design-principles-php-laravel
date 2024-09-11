<?php

namespace App\Solid\ISP\Good;

/**
 * Class representing a train which can be driven but cannot turn.
 */
class Train implements IDrivable
{
    /**
     * Move the train forward.
     */
    function GoForward(): void
    {
        echo "Train going forward. \r\n";
    }

    /**
     * Move the train backward.
     */
    function GoBackward(): void
    {
        echo "Train going backward. \r\n";
    }
}
