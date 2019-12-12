<?php

echo "<pre>";

$arr1 = [1, 2, 3, 4];
$arr2 = [];
foreach ($arr1 as $item) {
    $arr2[] = $item * 10;
}
print_r($arr2);

$op = function ($item) {
    return $item * 10;
};
$arr3 = array_map($op, $arr1);
print_r($arr3);

$arr3 = array_map(function ($item) {
    return $item * 10;
}, $arr1);
print_r($arr3);

echo "<hr/>";

$arr4 = array_filter($arr1, function ($item) {
    return $item % 2 == 0;
});
print_r($arr4);

echo "<hr/>";

$sum = array_reduce($arr1, function ($a, $b) {
    return $a + $b;
});

echo "$sum\n";

$names = ["Ann", "Bob", "Claire", "Dave"];
$allName = array_reduce($names, function($a, $b){
    return "$b, $a";
});
echo "$allName\n";