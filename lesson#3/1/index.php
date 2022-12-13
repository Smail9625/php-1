<?php
$num1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = [];

foreach ($num1 as $index => $number1) {
    $result[] = $number1 * $number[$index];
}

print_r($result);
