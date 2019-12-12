<?php

class InterestCalculator
{
    public function calculate(float $money): float
    {
        return $money * 0.07;
    }
}

class InterestCalculator2 extends InterestCalculator
{
    public function calculate(float $money): float
    {
        return $money * 0.10;
    }
}

echo "<pre>";

function printInterest(InterestCalculator $calculator){
    echo "interest is " . $calculator->calculate(100);
}

$calculator = new InterestCalculator2();
printInterest($calculator);
