<?php

namespace App\Solid\LSP\Good;

/**
 * Base class for menu items.
 */
class MenuItem
{
    protected int $price;
    protected string $name;
    protected string $description;

    /**
     * MenuItem constructor.
     * @param int $price
     * @param string $name
     * @param string $description
     */
    public function __construct(int $price, string $name, string $description)
    {
        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Get the price of the item.
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price - $this->getDiscount();
    }

    /**
     * Get the discount applied to the item.
     * @return int
     */
    protected function getDiscount(): int
    {
        return 0;
    }
}
