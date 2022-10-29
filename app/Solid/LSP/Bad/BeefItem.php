<?php

namespace App\Solid\LSP\Bad;

class BeefItem extends MenuItem
{
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }
}
