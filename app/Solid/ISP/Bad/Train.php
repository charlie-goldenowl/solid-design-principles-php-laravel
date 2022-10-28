<?php

namespace App\Solid\ISP\Bad;

use Nette\NotImplementedException;

class Train implements IDrivable
{
    function GoForward(): void
    {
        echo "Train going forward. \r\n";
    }

    function GoBackward(): void
    {
        echo "Train going backward. \r\n";
    }

    function TurnLeft(): void
    {
        throw new NotImplementedException();
    }

    function TurnRight(): void
    {
        throw new NotImplementedException();
    }
}
