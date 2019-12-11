<?php

/**
 * @param int[] $numbers
 * @param int $total
 * @return bool
 */
function hasSumOfTwo(array $numbers, int $total): bool
{
    $i = 0;
    while ($i < count($numbers)) {
        $j = $i + 1;
        while ($j < count($numbers)) {
            $sum = $numbers[$i] + $numbers[$j];
            if ($sum == $total) {
                return true;
            }
            $j++;
        }
        $i++;
    }
    return false;
}

assert(hasSumOfTwo([1, 2, 3, 4, 5, 6], 10) == true); // 4 + 6
assert(hasSumOfTwo([3, 4, 7], 8) == false);