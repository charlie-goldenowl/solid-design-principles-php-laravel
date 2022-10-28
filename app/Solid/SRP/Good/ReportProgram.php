<?php

namespace App\Solid\SRP\Good;


class ReportProgram
{
    public function report(Report $report, ReportFormattable $formatter) : string
    {
        return $formatter->format($report);
    }
}
