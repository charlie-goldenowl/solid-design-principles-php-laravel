<?php

namespace App\Solid\LSP\Bad;

class MenuItem
{

    public int $price;
    public string $name;
    public string $description;


    public function __construct(int $price, string $name, string $description)
    {
        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
    }

    public function getPrice(){
        return $this->price;
    }
}
