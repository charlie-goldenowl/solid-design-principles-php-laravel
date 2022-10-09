<?php

namespace App\Solid\SRP_Refactored;

interface ReportFormattable
{
    public function format(Report $report) : string;
}
