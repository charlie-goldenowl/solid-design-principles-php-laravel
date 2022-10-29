<?php

namespace App\Solid\LSP\Bad;

class BeverageItem extends MenuItem
{
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }

    public function getPriceWithDiscount(int $discountPercent){
        return $this->price - ($this->price * $discountPercent/ 100);
    }
}
