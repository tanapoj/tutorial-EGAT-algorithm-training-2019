<?php

//session_start();
//
//$username = $_POST["username"]; //u123
//$password = $_POST["password"]; //1111
//
//$connection = mysqli_connect("localhost", "root", "1234");
//$result = mysqli_query("
//    SELECT *
//    FROM Users
//    WHERE username = '$username' AND password = '$password'
//");
//
//if(mysqli_num_rows($result) == 1){
//    $user = mysqli_fetch_assoc($result);
//    $_SESSION["current_user"] = $user;
//}
//else{
//    echo "Username or Password incorrect!";
//}

class User
{
    private $id;
    private $username;

    public function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

class Authenticator
{
    public function login(Request $request): ?User
    {
        $username = $request->post("username");
        $password = $request->post("password");

        $connection = mysqli_connect("localhost", "root", "1234");
        $result = mysqli_query("
                SELECT *
                FROM Users
                WHERE username = '$username' AND password = '$password'
            ");

        if (mysqli_num_rows($result) == 1) {
            $userInfo = mysqli_fetch_assoc($result);
            $userObject = new User($userInfo["id"], $userInfo["username"]);
            $_SESSION["current_user"] = $userObject;
            return $userObject;
        } else {
            return null;
        }
    }
}

class Request{
    public function post(string $field){
        return $_POST[$field];
    }
}

$auth = new Authenticator();
$request = new Request();
$user = $auth->login($request);
if($user == null){
    echo "Username or Password incorrect!";
}
else{
    echo "Hello, " . $user->getUsername();
}