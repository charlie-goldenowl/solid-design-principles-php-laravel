<?php

namespace App\Solid\SRP\Good;

interface ReportFormattable
{
    public function format(Report $report) : string;
}
