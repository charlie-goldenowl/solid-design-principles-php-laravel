<?php

use App\Solid\SRP\Good\Report;
use App\Solid\SRP\Good\PDFFormatter;
use App\Solid\SRP\Good\WordFormatter;
use App\Solid\SRP\Good\ReportProgram;

$report = new Report('Annual Report', new \DateTime('2024-09-01'));

$pdfFormatter = new PDFFormatter();
$wordFormatter = new WordFormatter();
$reportProgram = new ReportProgram();

echo $reportProgram->report($report, $pdfFormatter);
echo "\n";
echo $reportProgram->report($report, $wordFormatter);
