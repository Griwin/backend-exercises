<?php

$numbers = [3, 12, 7, 25, 9, 10, 18];
$res = [];
$sum = 0;

foreach ($numbers as $number) {
    if ($number >= 10){
        $res[] = $number;
        $sum += $number;
    }
}
print_r($sum);
