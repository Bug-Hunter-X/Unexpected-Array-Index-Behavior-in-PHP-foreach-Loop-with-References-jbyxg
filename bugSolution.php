```php
<?php
function increment_array_corrected($arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray;
}

$numbers = [1, 2, 3];
$incrementedNumbers = increment_array_corrected($numbers);
print_r($incrementedNumbers);
//Expected output: Array ( [0] => 2 [1] => 3 [2] => 4 )
?>
```