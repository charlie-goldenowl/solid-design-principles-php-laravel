<?php

namespace Tests\Unit\LSP;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class ReportTest extends TestCase
{
    public function test_refactored()
    {
        $fommater = new \App\Solid\LSP_Refactored\PDFFormatter();
        $reportProgram = new \App\Solid\LSP_Refactored\ReportProgram();
        $report = new \App\Solid\LSP_Refactored\Report("AB Report", Carbon::now());
        $reportContent = $reportProgram->report($report, $fommater);
        $this->assertStringContainsString("PDF", $reportContent);
    }


    public function test_violation()
    {
        $report = new \App\Solid\LSP_Violation\Report("AB Report", Carbon::now());
        $reportProgram = new \App\Solid\LSP_Violation\ReportProgram();
        $reportContent = $reportProgram->report($report, "PDF");
        $this->assertStringContainsString("PDF", $reportContent);
    }
}
