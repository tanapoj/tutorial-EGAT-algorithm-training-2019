<?php

function palindromicCounter(string $sentence): int
{
    $n = strlen($sentence);
    $max = 0;
    for ($i = 0; $i < $n; $i += 0.5) {
        if ($i == intval($i)) {
            $count = 1;
            $front = intval($i - 1);
            $back = intval($i + 1);
        } else {
            $count = 0;
            $front = intval($i - 0.5);
            $back = intval($i + 0.5);
        }

        for (; $front >= 0 && $back < $n; $front--, $back++) {
            if ($sentence[$front] != $sentence[$back]) break;
            $count += 2;
        }

        $max = max($count, $max);
    }
    return $max;
}

assert(palindromicCounter("civic") == 5); //civic
assert(palindromicCounter("abccivic") == 5); //civic
assert(palindromicCounter("abccivicxyz") == 5); //civic
assert(palindromicCounter("onoonabc") == 4); //noon
assert(palindromicCounter("oonoonabc") == 5); //oonoo
assert(palindromicCounter("abc") == 1); //a or b or c

