<?php

namespace App\Solid\SRP\Good;

class Report
{
    private string $name;
    private \DateTime $date;

    public function __construct(string $name, \DateTime $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function getTitle(): string
    {
        return $this->name;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function getContents(): array
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate()->format('Y-m-d'),
        ];
    }
}
