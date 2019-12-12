<?php

//class A{
//    function f(){}
//    function g(){}
//}
//abstract class B{
//    function f(){}
//    abstract function g();
//}
//interface C{
//    function f();
//    function g();
//}

//interface Displayable{
//
//}

interface IDisplay
{
    public function display($message);
}

function addThenDisplay(int $a, int $b, IDisplay $displayer)
{
    //logic
    $sum = $a + $b;
    //render
    $displayer->display($sum);
}

class Display1 implements IDisplay
{
    public function display($message)
    {
        echo "sum is " . $message;
    }
}

class Display2 implements IDisplay
{

    public function display($message)
    {
        echo "<fieldset>";
        echo "<legend>sum is</legend>";
        echo $message;
        echo "</fieldset>";
    }
}

addThenDisplay(10, 20, new Display2());

addThenDisplay(100, 200, new class implements IDisplay
{
    public function display($ans)
    {
        echo "ผลรวมคือ" . $ans;
    }
});