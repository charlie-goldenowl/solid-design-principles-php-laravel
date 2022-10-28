<?php

namespace App\Solid\ISP\Good;

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
}
