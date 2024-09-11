### Analysis of the Poor Design in Terms of the Single Responsibility Principle (SRP)

### Example Code

```php
<?php

namespace App\Solid\SRP\Bad;

class Report
{
    private string $name;
    private \DateTime $date;

    public function __construct(string $name, \DateTime $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function getTitle()
    {
        return  $this->name;
    }

    public function getDate()
    {
        return  $this->date;
    }

    public function formatWord()
    {
        $title = $this->getTitle();
        $date = $this->getDate();
        return <<<EOD
           Word Format
           $title
           $date
        EOD;
    }

    public function formatPDF()
    {
        $title = $this->getTitle();
        $date = $this->getDate();
        return <<<EOD
           PDF Format
           $title
           $date
        EOD;
    }
}

<?php

namespace App\Solid\SRP\Bad;

class ReportProgram
{
    public function report(Report $report, string $format) : string
    {
        if($format == "Word"){
            return $report->formatWord();
        }elseif($format == "PDF"){
            return $report->formatPDF();
        }

        throw new \Exception("Invalid format!");
    }
}
```

### Poor Design Analysis

1. **Violation of Single Responsibility Principle (SRP):**
    - **Report Class:** The `Report` class is responsible for both storing report data (`name` and `date`) and formatting it into different output formats (`Word` and `PDF`). This mixes data management with formatting concerns. According to SRP, a class should have only one reason to change. If the formatting requirements change or if new formats need to be supported, you would need to modify the `Report` class.
    - **ReportProgram Class:** This class is responsible for selecting the appropriate format and delegating the formatting task. It has a single responsibility: handling the report formatting based on the format requested. However, this approach still couples the formatting logic with the report's core data.

2. **Tight Coupling:**
    - The `Report` class is tightly coupled with specific formatting methods. Any change to the formatting logic will require changes to the `Report` class itself.

3. **Scalability Issues:**
    - Adding new formats (e.g., `Excel`, `HTML`) will require modifying the `Report` class. This makes it harder to maintain and extend the class as new formats are added.

### Improved Design

To adhere to the Single Responsibility Principle, you can refactor the code as follows:

1. **Separate Formatting Responsibilities:**

   ```php
   <?php

   namespace App\Solid\SRP;

   interface ReportFormatterInterface
   {
       public function format(Report $report): string;
   }

   class WordFormatter implements ReportFormatterInterface
   {
       public function format(Report $report): string
       {
           $title = $report->getTitle();
           $date = $report->getDate();
           return <<<EOD
              Word Format
              $title
              $date
           EOD;
       }
   }

   class PDFFormatter implements ReportFormatterInterface
   {
       public function format(Report $report): string
       {
           $title = $report->getTitle();
           $date = $report->getDate();
           return <<<EOD
              PDF Format
              $title
              $date
           EOD;
       }
   }
   ```

2. **Refactor Report Class:**

   ```php
   <?php

   namespace App\Solid\SRP;

   class Report
   {
       private string $name;
       private \DateTime $date;

       public function __construct(string $name, \DateTime $date)
       {
           $this->name = $name;
           $this->date = $date;
       }

       public function getTitle()
       {
           return  $this->name;
       }

       public function getDate()
       {
           return  $this->date;
       }
   }
   ```

3. **Refactor ReportProgram Class:**

   ```php
   <?php

   namespace App\Solid\SRP;

   class ReportProgram
   {
       public function report(Report $report, ReportFormatterInterface $formatter): string
       {
           return $formatter->format($report);
       }
   }
   ```

### Improved Design Benefits

- **Adherence to SRP:** Each class now has a single responsibility. The `Report` class is solely responsible for holding the report data. The formatting logic is separated into different classes that implement the `ReportFormatterInterface`.
- **Extensibility:** New formats can be added by creating new formatter classes without modifying existing code.
- **Flexibility:** The `ReportProgram` class now depends on an abstraction (`ReportFormatterInterface`) rather than concrete implementations, making it easier to swap out formatting strategies.

This refactoring ensures that each component has a clear, single responsibility and makes the system more maintainable and scalable.
