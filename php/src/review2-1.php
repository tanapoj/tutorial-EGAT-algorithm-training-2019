<?php

/**
 * @param int[] $numbers
 * @param int $total
 * @return bool
 */
function hasSumOfTwo(array $numbers, int $total): bool
{
    $exist = [];
    foreach ($numbers as $item) {
        $require = $total - $item;
        if (in_array($require, $exist)) {
            return true;
        }
        $exist[] = $item;
    }
    return false;
}

assert(hasSumOfTwo([1, 2, 3, 4, 5, 6], 10) == true); // 4 + 6
assert(hasSumOfTwo([3, 4, 7], 8) == false);