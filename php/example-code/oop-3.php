<?php

class Rectangle
{
    private $width = 0;
    private $height = 0;

    public function __construct(int $width, int $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function setWidth(int $width)
    {
        if ($width < 0) {
            throw new Exception("Length cannot be negative");
        }
        $this->width = $width;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setHeight(int $height)
    {
        if ($height < 0) {
            throw new Exception("Length cannot be negative");
        }
        $this->height = $height;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }
}

$rec = new Rectangle(100, 200);
$rec->setWidth(30);
$rec->setHeight(11);
echo $rec->getArea();