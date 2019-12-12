<?php

class Square
{
    protected $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getPerimeter(): int
    {
        return $this->width * 4;
    }

    public function getArea(): int
    {
        return $this->width * $this->width;
    }

}

//Parent    : Square
//Child     : Cube

class Cube extends Square
{
    //Override Method
    public function getArea(): int
    {
        return parent::getArea() * 6;
    }

    public function getVolume(): int
    {
        return $this->width * $this->width * $this->width;
    }
}

echo "<pre>";

$square = new Square(10);
echo "perimeter is {$square->getPerimeter()}\n";
echo "area is {$square->getArea()}";

echo "<hr/>";

$cube = new Cube(10);
echo "perimeter is {$cube->getPerimeter()}\n";
echo "area is {$cube->getArea()}\n";
echo "volume is {$cube->getVolume()}";