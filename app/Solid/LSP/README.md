### Analysis of the Poor Design in Terms of the Liskov Substitution Principle (LSP)

The provided code violates the Liskov Substitution Principle (LSP) from SOLID design principles. Here's an analysis of the issues:

### Example Code

```php
<?php

namespace App\Solid\LSP\Bad;

class BeefItem extends MenuItem
{
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }
}
<?php

namespace App\Solid\LSP\Bad;

class BeverageItem extends MenuItem
{
    public function __construct(int $price, string $name, string $description)
    {
        parent::__construct($price, $name, $description);
    }

    public function getPriceWithDiscount(int $discountPercent){
        return $this->price - ($this->price * $discountPercent / 100);
    }
}
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
        $beverageItem = new BeverageItem(200, "Orange", "big");
        $beefItem = new BeefItem(100, "Wagyu", "small");

        $this->printItemPrice($beverageItem);
        $this->printItemPrice($beefItem);
    }
}
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
```

### Poor Design Analysis

1. **Violation of Liskov Substitution Principle (LSP):**
    - **Behavioral Inconsistency:** The `BeverageItem` class introduces a new method, `getPriceWithDiscount`, which is not present in the base class `MenuItem`. This means that code using `MenuItem` might expect all its subclasses to support the same methods. However, `BeefItem` does not support `getPriceWithDiscount`, which is not an issue in this specific case but can lead to behavioral inconsistencies if the base class is used polymorphically.
    - **Conditional Logic in Client Code:** The `printItemPrice` method in `LiskovExample` uses `instanceof` to differentiate between `BeverageItem` and `BeefItem`. This indicates that the subclasses are not substitutable for the base class in a straightforward manner, which violates LSP. Ideally, subclasses should be used interchangeably with the base class without requiring special handling.

2. **Scalability Issues:**
    - **Adding New Methods:** When new item types are introduced, or if the base class (`MenuItem`) is modified, it will likely require updates to the `printItemPrice` method. This tight coupling between the client code and specific subclasses makes the code less flexible and harder to maintain.

### Improved Design

To adhere to the Liskov Substitution Principle, you should ensure that subclasses do not change the expected behavior of the base class. One way to improve the design is to include the additional functionality in a way that does not affect the base class’s contract. Here’s a refactored design:

1. **Define an Interface for Discountable Items:**

   ```php
   <?php

   namespace App\Solid\LSP\Good;

   interface Discountable
   {
       public function getPriceWithDiscount(int $discountPercent): float;
   }
   ```

2. **Implement the Discountable Interface in the Subclasses:**

   ```php
   <?php

   namespace App\Solid\LSP\Good;

   class BeverageItem extends MenuItem implements Discountable
   {
       public function __construct(int $price, string $name, string $description)
       {
           parent::__construct($price, $name, $description);
       }

       public function getPriceWithDiscount(int $discountPercent): float
       {
           return $this->price - ($this->price * $discountPercent / 100);
       }
   }
   ```

3. **Adjust the BeefItem Class:**

   ```php
   <?php

   namespace App\Solid\LSP\Good;

   class BeefItem extends MenuItem
   {
       public function __construct(int $price, string $name, string $description)
       {
           parent::__construct($price, $name, $description);
       }
   }
   ```

4. **Refactor the Client Code to Handle Discountable Items Separately:**

   ```php
   <?php

   namespace App\Solid\LSP\Good;

   class LiskovExample
   {
       /**
        * @throws \Exception
        */
       public function printItemPrice(MenuItem $item): void
       {
           if ($item instanceof Discountable) {
               echo "\nDiscounted price:";
               echo $item->getPriceWithDiscount(10);
           } else {
               echo "\nRegular price:";
               echo $item->getPrice();
           }
       }

       /**
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
   ```

### Improved Design Benefits

- **Adherence to LSP:** Subclasses now adhere to the base class contract without changing its expected behavior. `BeverageItem` and `BeefItem` can be used interchangeably as instances of `MenuItem` without special handling.
- **Enhanced Flexibility:** The `LiskovExample` class no longer needs to check for specific subclasses; it can handle all `MenuItem` instances uniformly and use polymorphism effectively.
- **Scalability:** Adding new item types or functionalities (like new discount strategies) becomes easier without affecting existing code.

This refactoring ensures that subclasses properly adhere to the Liskov Substitution Principle, making the system more robust and maintainable.
