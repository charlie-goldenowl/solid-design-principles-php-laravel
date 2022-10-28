<?php

namespace App\Solid\ISP\Bad;

interface IDrivable
{
    function GoForward(): void;

    function GoBackward(): void;

    function TurnLeft(): void;

    function TurnRight(): void;
}
