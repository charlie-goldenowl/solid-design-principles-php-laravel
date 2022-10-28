<?php

namespace App\Solid\SRP\Bad;


class ReportProgram
{
    public function report(Report $report, string $format) : string
    {
        if($format == "Word"){
            return $report->formatWord();
        }elseif($format == "PDF"){
            return $report->formatPDF();
        }

        throw new \Exception("Invalid format!");
    }
}
