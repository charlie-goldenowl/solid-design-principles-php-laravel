<?php

namespace App\Solid\LSP_Refactored;

interface ReportFormattable
{
    public function format(Report $report) : string;
}
