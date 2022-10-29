<?php

namespace App\Solid\LSP\Good;

class BeverageItem extends MenuItem
{
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }

    public function getPrice()
    {
        return $this->price - $this->getDiscount();
    }

    private function getDiscount(){
        $discountPercent = 10;
        return ($this->price * $discountPercent/ 100);
    }
}
