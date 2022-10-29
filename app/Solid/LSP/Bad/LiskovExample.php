<?php

namespace App\Solid\LSP\Bad;

class LiskovExample
{
    /**
     * @throws \Exception
     */
    public function printItemPrice($item){
        if($item instanceof BeverageItem){
            echo "\nBeverage price:";
            echo $item->getPriceWithDiscount(10);
        }else if($item instanceof BeefItem){
            echo "\nBeef price:";
            echo $item->getPrice();
        }else{
            throw new \Exception("Item not found");
        }
    }

    /**
     * @throws \Exception
     */
    public function main(){
        $beverageItem = new BeverageItem(200, "Orange","big");
        $beefItem = new BeefItem(100, "Wagyu","small");

        $this->printItemPrice($beverageItem);
        $this->printItemPrice($beefItem);
    }
}
