<?php

//$x1 = 20;
//$y1 = 30;
//$x2 = 34;
//$y2 = 15;
//$dif = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
//echo $dif;


class Point
{
    public $x;
    public $y;

    function dif(Point $other)
    {
        $d = $this->formula($this->x, $this->y, $other->x, $other->y);
        return $d;
    }

    private function formula($x1, $y1, $x2, $y2)
    {
        return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
    }
}

$p1 = new Point();
$p1->x = 20;
$p1->y = 30;

$p2 = new Point();
$p2->x = 34;
$p2->y = 15;

$dif = $p1->dif($p2);
echo $dif;