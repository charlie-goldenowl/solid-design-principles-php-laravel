<?php

namespace App\Solid\LSP\Good;

/**
 * Class representing a beef item.
 */
class BeefItem extends MenuItem
{
    /**
     * BeefItem constructor.
     * @param int $price
     * @param string $name
     * @param string $description
     */
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }
}
