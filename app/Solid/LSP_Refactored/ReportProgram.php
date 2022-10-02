<?php

namespace App\Solid\LSP_Refactored;

use Carbon\Carbon;

class ReportProgram
{
    public function report(Report $report, ReportFormattable $formatter)
    {
        return $formatter->format($report);
    }
}
