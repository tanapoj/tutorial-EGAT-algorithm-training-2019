<?php

class TheValue{
    public $x;
}

function setByValue(int $x){
    $x = 2;
}

function setByRef(TheValue $theValue){
    $theValue->x = 2;
}

echo "<pre>";

$x = 1;
setByValue($x);
echo "$x\n";

$theValue = new TheValue();
$theValue->x = 1;
setByRef($theValue);
echo "{$theValue->x}\n";