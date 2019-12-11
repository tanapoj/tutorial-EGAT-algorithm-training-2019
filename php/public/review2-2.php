<?php

function water_keeper(array $levels): int
{
    $n = count($levels);
    if($n == 0) return 0;

    $total = 0;
    $current = 0;
    $left = 0;
    $right = $n - 1;

    $limit = 0;
    foreach ($levels as $level){
        if($level > $limit){
            $limit = $level;
        }
    }

    while($limit > 0 && $left < $right){
        while($left < $n){
            if($levels[$left] > $current) break;
            $left++;
        }
        while($right >= 0){
            if($levels[$right] > $current) break;
            $right--;
        }
        for($i = $left; $i <= $right; $i++){
            if($current >= $levels[$i]){
                $total++;
            }
        }
        $limit--;
        $current++;
    }
}

assert(water_keeper([0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1]) == 6);
assert(water_keeper([0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0]) == 23);