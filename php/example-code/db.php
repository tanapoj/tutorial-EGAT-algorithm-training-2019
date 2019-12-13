<?php

echo "<pre>";

//$date = 13;
//$month = 12;
//$year_bd = 2562;
//$year = $year_bd - 543;
//
//$time = strtotime("$year-$month-$date 10:20:30");
//
//echo date("c", $time);
//echo "\n";
//echo date("Y-m-d H:i:s", $time);


$todo = [
    "title" => "buy product",
    "description" => "buy 2 milk",
    "status" => 100,
    "create_at" => date("Y-m-d H:i:s"),
    "update_at" => date("Y-m-d H:i:s"),
    "user_id" => 1,
];

//$sql = "
//INSERT INTO todo
//VALUES('{$todo['title']}', '{$todo['description']}')
//";

//$sql = "INSERT INTO todo(";
//foreach ($todo as $field => $_) {
//    $sql .= "$field,";
//}
//$sql = substr($sql, 0, strlen($sql) - 1);
//$sql .= ")";

$fields = array_keys($todo);
$values = array_values($todo);
//javascript x = {"id":1}
//Object.keys(x), Object.values(x)
$value_with_quote = array_map(function ($value) {
    if (is_numeric($value)) return $value;
    else return "'$value'";
}, $values);

$sql = "INSERT INTO todo(" . implode(",", $fields) . ")\n";
$sql .= "VALUES(" . implode(",", $value_with_quote) . ")";

echo $sql;