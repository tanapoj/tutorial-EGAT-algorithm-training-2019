<?php

function rotateSquareRight(array $square): array
{
    $width = count($square);
    if ($width == 0) return [[]];

    $height = count($square[0]);
    $rotate = [];

    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $rotate[$i][$j] = $square[$width - $j - 1][$i];
        }
    }
    //print_r($rotate);
    return $rotate;
}

assert(
    rotateSquareRight(
        [
            [1, 2, 3, 4],
            [5, 6, 7, 8],
            [9, 10, 11, 12],
        ]
    ) ==
    [
        [9, 5, 1],
        [10, 6, 2],
        [11, 7, 3],
        [12, 8, 4],
    ]
);