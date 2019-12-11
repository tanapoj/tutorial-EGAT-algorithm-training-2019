<?php

//
//class Car{
//    public $fuel;
//    public $distance;
//
//    public function __toString()
//    {
//        return "Car with {$this->fuel} {$this->distance}";
//    }
//}
//
//$c1 = new Car();
//$c1->fuel = 20;
//$c1->distance = 1000;
//
//$c2 = new Car();
//$c2->fuel = $c1->fuel;
//$c2->distance = $c1->distance;
//
//echo $c1;

class Score{
    public $point;
}

class Student{
    public $score;
}

$s1 = new Student();
$s1->score = new Score();

$s2 = $s1;

$s3 = new Student();
$s3->score = $s1->score;