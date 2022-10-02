<?php

namespace Tests\Unit\LSP;

use App\Solid\LSP_Refactored\PDFFormatter;
use App\Solid\LSP_Refactored\Report;
use App\Solid\LSP_Refactored\ReportProgram;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class ReportTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_refactored()
    {
        $fommater = new \App\Solid\LSP_Refactored\PDFFormatter();
        $reportProgram = new \App\Solid\LSP_Refactored\ReportProgram();
        $report = new \App\Solid\LSP_Refactored\Report("AB Report", Carbon::now());
        $reportContent = $reportProgram->report($report, $fommater);
        $this->assertStringContainsString("PDF", $reportContent);
    }
}
