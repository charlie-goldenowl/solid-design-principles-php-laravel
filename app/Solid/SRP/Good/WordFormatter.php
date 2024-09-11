<?php

namespace App\Solid\SRP\Good;

class WordFormatter implements ReportFormattable
{
    public function format(Report $report): string
    {
        $title = $report->getTitle();
        $date = $report->getDate()->format('Y-m-d'); // Định dạng ngày tháng cho phù hợp
        return <<<EOD
           Word Format
           Title: $title
           Date: $date
        EOD;
    }
}
