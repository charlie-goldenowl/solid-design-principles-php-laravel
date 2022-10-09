<?php

namespace App\Solid\SRP_Refactored;


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

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
}
