<?php

namespace App\Solid\LSP_Refactored;

class PDFFormatter implements ReportFormattable
{
    public function format(Report $report): string
    {
        $title = $report->getTitle();
        $date = $report->getDate();
        return <<<EOD
           PDF Format
           $title
           $date
        EOD;
    }
}
