```php
<?php
function increment_array(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
increment_array($numbers);
print_r($numbers);

//Unexpected output: Array ( [0] => 2 [1] => 4 [3] => 6 ) // Notice the unexpected index 3

//The problem:
//The foreach loop using & creates a reference to each element.  If the array is modified (values are added) during iteration, the foreach loop can unexpectedly continue past the original bounds of the array.
//This can lead to unexpected behavior and unexpected index values as shown in the example.

//Solution:
//Avoid modifying the array structure within the foreach loop using reference.
?>
```