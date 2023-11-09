# Sample File

Simple classes to get real file sample for test purposes. May be used in phpunit tests for example.

Files were taken from public resources over internet.

## Usage

```php
use JustCoded\SampleFile\Image;
use JustCoded\SampleFile\Document;
use JustCoded\SampleFile\Sheet;


$imagePath = Image::make()
    ->png() // or jpg()
    ->medium()
    ->path();
    
$docPath = Document::make()
    ->docx()
    ->path();

$sheetPath = Sheet::make()
    ->xlsx()
    ->path();
```

Your IDE will help you with available methods and options :).
