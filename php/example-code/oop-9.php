<?php

abstract class Handler{
    abstract function exec();
}

class Router{
    function setHandler(string $path, Handler $handler){
        if($path == "/home"){
            $handler->exec();
        }
    }
}
/////////////////////
$router = new Router();

class HomePage extends Handler {
    function exec(){
        echo "<html>...</html>";
    }
}
$homepage = new HomePage();
$router->setHandler("/home", $homepage);

$router->setHandler("/product", new class extends Handler{
    function exec()
    {
        echo "<html>...</html>";
    }
});