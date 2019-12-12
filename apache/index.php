<?php
echo "<pre>";
echo "This is index page\n";
$path = explode("/", ltrim($_SERVER['REDIRECT_URL'], '/'));
print_r($path);

if(count($path) == 2 && $path[0] == "test" && $path[1] == "a"){
    include "app/a.php";
}
elseif(count($path) == 3 && $path[0] == "test" && $path[1] == "a" && is_numeric($path[2])){
    $id = intval($path[2]);
    include "app/a.php";
}
else{
    echo "404";
}