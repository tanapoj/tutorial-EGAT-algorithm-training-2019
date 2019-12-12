<?php

abstract class ParkingFeeCalculator
{
    abstract function getFee(int $hour): int;

    function getStartRate(): int
    {
        return 10;
    }
}

class Parking1 extends ParkingFeeCalculator
{
    function getFee(int $hour): int
    {
        return $hour * 10;
    }
}

$feeCalculator = new Parking1();
echo "Fee is " . $feeCalculator->getFee(10);