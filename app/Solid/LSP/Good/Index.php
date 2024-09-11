<?php

namespace App\Solid\LSP\Good;

class LiskovExample
{
    /**
     * Print the price of the item.
     * @param MenuItem $item
     * @throws \Exception
     */
    public function printItemPrice(MenuItem $item): void
    {
        if ($item instanceof BeverageItem) {
            echo "\nBeverage price:";
        } else if ($item instanceof BeefItem) {
            echo "\nBeef price:";
        } else {
            throw new \Exception("Item not found");
        }
        echo $item->getPrice();
    }

    /**
     * Main function to run the example.
     * @throws \Exception
     */
    public function main(): void
    {
        $beverageItem = new BeverageItem(200, "Orange", "big");
        $beefItem = new BeefItem(100, "Wagyu", "small");

        $this->printItemPrice($beverageItem);
        $this->printItemPrice($beefItem);
    }
}


// Create an instance of LiskovExample
$example = new LiskovExample();

try {
    // Run the main function to execute the example
    $example->main();
} catch (\Exception $e) {
    // Catch and display any exceptions that occur
    echo "Error: " . $e->getMessage();
}
