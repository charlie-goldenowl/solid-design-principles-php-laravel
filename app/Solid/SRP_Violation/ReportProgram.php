<?php

namespace App\Solid\SRP_Violation;


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
