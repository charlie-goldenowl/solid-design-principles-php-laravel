<?php

namespace App\Solid\LSP\Good;

/**
 * Class representing a beverage item.
 */
class BeverageItem extends MenuItem
{
    /**
     * BeverageItem constructor.
     * @param int $price
     * @param string $name
     * @param string $description
     */
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }

    /**
     * Get the price of the beverage item with discount.
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price - $this->getDiscount();
    }

    /**
     * Get the discount for the beverage item.
     * @return int
     */
    protected function getDiscount(): int
    {
        $discountPercent = 10;
        return ($this->price * $discountPercent / 100);
    }
}
