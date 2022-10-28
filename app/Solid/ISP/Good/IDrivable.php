<?php

namespace App\Solid\ISP\Good;

interface IDrivable
{
    function GoForward(): void;

    function GoBackward(): void;
}
