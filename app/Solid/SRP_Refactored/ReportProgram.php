<?php

namespace App\Solid\SRP_Refactored;


class ReportProgram
{
    public function report(Report $report, ReportFormattable $formatter) : string
    {
        return $formatter->format($report);
    }
}
