<?php

namespace App\Solid\LSP_Refactored;

class WordFormatter implements ReportFormattable
{

    public function format(Report $report): string
    {
        $title = $report->getTitle();
        $date = $report->getDate();
        return <<<EOD
           Word Format
           $title
           $date
        EOD;
    }
}
