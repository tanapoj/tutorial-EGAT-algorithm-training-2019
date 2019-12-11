<?php

//$board = <<< BOARD
//ABC
//EDF
//AAA
//BOARD;
//
//$search = "BDAAFC";



$board = <<< BOARD
BACD
DCEF
HCDE
BGFA
BOARD;

$search = "ABCDEFGH";




define("N", 0);
define("E", 1);
define("S", 2);
define("W", 3);
define("NE", 4);
define("SE", 5);
define("SW", 6);
define("NW", 7);

function makeTable(string $domain): array
{
    $lines = explode("\r\n", $domain);
    $board = array_map(function ($line) {
        return str_split($line);
    }, $lines);
    $visits = array_map(function ($row) {
        return array_map(function ($row) {
            return false;
        }, $row);
    }, $board);
    return [$board, $visits];
}

function toString(array $table, array $visits): string
{
    $s = "";
    for ($i = 0; $i < count($table); $i++) {
        for ($j = 0; $j < count($table[$i]); $j++) {
            [$cell, $visit] = [$table[$i][$j], $visits[$i][$j]];
            $s .= ($visit ? "[$cell]" : " $cell ") . " ";
        }
        $s .= "\n";
    }
    return $s;
}

function getNextCellPosition(array $table, int $i, int $j, int $dir): ?array
{
    switch ($dir) {
        case N:
        case NE:
        case NW:
            if ($i <= 0) return null;
            $i--;
            break;
        case S:
        case SE:
        case SW:
            if (count($table) - 1 <= $i) return null;
            $i++;
            break;
    }
    switch ($dir) {
        case W:
        case NW:
        case SW:
            if ($j <= 0) return null;
            $j--;
            break;
        case E:
        case NE:
        case SE:
            if (count($table[0]) - 1 <= $j) return null;
            $j++;
            break;
    }
    return [$i, $j];
}

function getNextCellPositionNotVisited(array $table, array $visits, int $i, int $j): array
{
    $dirs = [N, S, E, W, NE, SE, SW, NW];
    $neighbor = array_map(function ($dir) use ($table, $i, $j) {
        return getNextCellPosition($table, $i, $j, $dir);
    }, $dirs);

    $neighbor = array_filter($neighbor);

    $possibleMove = array_map(function ($cell) use ($visits) {
        [$i, $j] = $cell;
        return $visits[$i][$j] ? null : $cell;
    }, $neighbor);

    return array_filter($possibleMove);
}

function searchCell(array $table, array $visits, string $search, int $i, int $j): bool
{
    //echo "($i $j) $search {$search[0]} {$table[$i][$j]}\n";
    //echo toString($table, $visits);
    //echo "\n";

    if (empty($search)) return true;
    if ($search[0] != $table[$i][$j]) return false;
    if (strlen($search) == 1) return true;

    $visits[$i][$j] = true;
    $cells = getNextCellPositionNotVisited($table, $visits, $i, $j);
    $nextSearch = substr($search, 1);
    foreach ($cells as $cell) {
        [$i, $j] = $cell;
        if (searchCell($table, $visits, $nextSearch, $i, $j)) return true;
    }
    $visits[$i][$j] = false;
    return false;
}

function searchTable(array $table, array $visits, string $search): bool
{
    for ($i = 0; $i < count($table); $i++) {
        for ($j = 0; $j < count($table[$i]); $j++) {
            if (searchCell($table, $visits, $search, $i, $j)) return true;
        }
    }
    return false;
}

echo "<pre>";
[$table, $visits] = makeTable($board);
$found = searchTable($table, $visits, $search);
//$found = searchCell($table, $visits, $search, 0, 1);
print_r("===$found===");