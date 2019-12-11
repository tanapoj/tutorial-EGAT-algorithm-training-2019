<?php

function reverseInt(int $number): int

{
//    if ($number < 0) {
//        $sign = -1;
//    } else {
//        $sign = 1;
//    }
//    $str = strval($number);
//    $reverse = strrev($str);
//    $reverse_number = intval($reverse);
//    return $sign * $reverse_number;

    if ($number < 0) {
        $sign = -1;
    } else {
        $sign = 1;
    }

    $number = abs($number);
    for ($digit = 0; $digit < 20; $digit++) {
        if (pow(10, $digit) > $number) {
            break;
        }
    }

    $sum = 0;
    $digit--;
    for ($i = 1; $digit >= 0; $i *= 10, $digit--) {
        $d = intval($number / pow(10, $digit)) % 10;
        $sum += $d * $i;
    }
    return $sign * $sum;
}

assert(reverseInt(123) == 321);
assert(reverseInt(1234) == 4321);
assert(reverseInt(-123) == -321);
assert(reverseInt(120) == 21);

