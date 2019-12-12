<?php

//First Class Function
//สามารถใส่ function ลงไปในตัวแปรได้

echo "<pre>";

function hello1(){
    echo "Hello, It's Meeee!!\n";
}

$x = 1;
$f = function(){
    echo "Hello, It's Meeee!!\n";
};

hello1();
$f();

$g = 'hello1';
$g();

