<?php

namespace App\Solid\ISP\Good2;


class Train implements IForwardDrivable
{
    function GoForward(): void
    {
        echo "Train going forward. \r\n";
    }
}
