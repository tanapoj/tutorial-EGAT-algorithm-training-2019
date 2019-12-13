<?php

$password_in_db = "1234";//plaintext
$password_in_db = "fe956eb76726149422296dde2a0b87f7";//hash


function hashPassword(string $password): string
{
    return md5("@#%#Y^$" . $password . "---$$35d");
}

echo hashPassword($password_in_db);
echo "<hr/>";

$password = "1234";

if (md5($password) == $password_in_db) {
    echo "Login!";
} else {
    echo "Fail!";
}

echo "<hr/>";
echo "<h1>Using password_hash</h1>";


$password_in_db = "1234";//plaintext
$hash = password_hash($password_in_db, PASSWORD_BCRYPT);
if (password_verify($password, $hash)) {
    echo "Login!";
} else {
    echo "Fail!";
}