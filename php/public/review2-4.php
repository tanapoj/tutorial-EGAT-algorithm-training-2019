<?php

function romanStringToInt(string $romanNumber): int
{
    $table = [
        null => 0,
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    $n = strlen($romanNumber);
    if ($n == 0) return 0;

    $total = 0;
    $highest = null;

    $rev = strrev($romanNumber);
    for ($i = 0; $i < $n; $i++) {
        $current_char = $rev[$i];
        $current_value = $table[$current_char];
        $highest_value = $table[$highest];
        if($current_value < $highest_value){
            $total = $total - $current_value;
        }
        else{
            $total = $total + $current_value;
            $highest = $current_char;
        }
    }
    echo "$total\n";
    return $total;
}

assert(romanStringToInt("I") == 1);
assert(romanStringToInt("III") == 3);
assert(romanStringToInt("IV") == 4);
assert(romanStringToInt("V") == 5);
assert(romanStringToInt("VII") == 7);
assert(romanStringToInt("IX") == 9);
assert(romanStringToInt("XXII") == 22);
assert(romanStringToInt("XVI") == 16);
assert(romanStringToInt("LXXIV") == 74);
assert(romanStringToInt("XLIX") == 49);