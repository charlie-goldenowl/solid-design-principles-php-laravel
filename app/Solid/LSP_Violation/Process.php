<?php

namespace App\Solid\LSP_Violation;

use Carbon\Carbon;

class Process
{
    public function report()
    {
        $report = new Report("Daily Report", Carbon::now());
        $report->getContents();
        $report->formatWord();
    }
}
