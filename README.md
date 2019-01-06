# odd_and_even

This module for UliCMS 2018.3 or later provides functions to check if a number is odd or even.

## Examples

```php
<?php
use function OddAndEven\isEven;
use function OddAndEven\isOdd;

var_dump(isEven(10)); // true
var_dump(isEven(3)); // false

var_dump(isOdd(7)); // true
var_dump(isOdd(12)); // false
?>
```