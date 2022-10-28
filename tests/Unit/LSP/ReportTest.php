<?php

namespace Tests\Unit\LSP;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class ReportTest extends TestCase
{
    public function test_refactored()
    {
        $fommater = new \App\Solid\SRP\Good\PDFFormatter();
        $reportProgram = new \App\Solid\SRP\Good\ReportProgram();
        $report = new \App\Solid\SRP\Good\Report("AB Report", Carbon::now());
        $reportContent = $reportProgram->report($report, $fommater);
        $this->assertStringContainsString("PDF", $reportContent);
    }


    public function test_violation()
    {
        $report = new \App\Solid\SRP\Bad\Report("AB Report", Carbon::now());
        $reportProgram = new \App\Solid\SRP\Bad\ReportProgram();
        $reportContent = $reportProgram->report($report, "PDF");
        $this->assertStringContainsString("PDF", $reportContent);
    }
}
