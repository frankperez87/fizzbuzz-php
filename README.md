# FizzBuzz Example in PHP
This is a FizzBuzz code example where every multiple of 3 and 5 are changed out for fizz and buzz. Numbers which are divisible by both are outputted as fizzbuzz.

### Example Usage
```php
<?php

require 'vendor/autoload.php';

$fb = new Acme\FizzBuzz;

// This will cycle through numbers 1 to 15 and return a FizzBuzz array. 
$output = $fb->executeUpTo(15); 

print '<pre>';
print_r($output);
print '</pre>';
```

### Example Output
```php
Array
(
    [0] => 1
    [1] => 2
    [2] => fizz
    [3] => 4
    [4] => buzz
    [5] => fizz
    [6] => 7
    [7] => 8
    [8] => fizz
    [9] => buzz
    [10] => 11
    [11] => fizz
    [12] => 13
    [13] => 14
    [14] => fizzbuzz
)
```