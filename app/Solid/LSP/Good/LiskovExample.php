<?php

namespace App\Solid\LSP\Good;

class LiskovExample
{
    /**
     * @throws \Exception
     */
    public function printItemPrice($item){
        if($item instanceof BeverageItem){
            echo "\nBeverage price:";
        }else if($item instanceof BeefItem){
            echo "\nBeef price:";
        }else{
            throw new \Exception("Item not found");
        }
        echo $item->getPrice();
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
