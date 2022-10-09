<?php

namespace App\Solid\SRP_Violation;


class Report
{
    private string $name;
    private \DateTime $date;

    public function __construct(string $name, \DateTime $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function getTitle()
    {
        return  $this->name;
    }

    public function getDate()
    {
        return  $this->date;
    }

    public function formatWord()
    {
        $title = $this->getTitle();
        $date = $this->getDate();
        return <<<EOD
           Word Format
           $title
           $date
        EOD;
    }

    public function formatPDF()
    {
        $title = $this->getTitle();
        $date = $this->getDate();
        return <<<EOD
           PDF Format
           $title
           $date
        EOD;
    }
}
