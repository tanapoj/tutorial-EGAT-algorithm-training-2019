<?php

class MyDateTime
{
    private $time;

    public function __construct($time = null)
    {
        if (is_null($time)) {
            $this->time = time();
        } else {
            $this->time = strtotime($time);
        }
    }

}

class Todo
{
    private $id;
    private $title;
    private $description;
    private $createAt;
    private $updateAt;
    private $userId;

    public function __construct(int $id, string $title, string $description, MyDateTime $createAt, ?MyDateTime $updateAt, int $userId)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return MyDateTime
     */
    public function getCreateAt(): MyDateTime
    {
        return $this->createAt;
    }

    /**
     * @return MyDateTime|null
     */
    public function getUpdateAt(): ?MyDateTime
    {
        return $this->updateAt;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getOwner(): User
    {

        $con = mysqli_connect("localhost", "root");
        mysqli_select_db($con, "tododb");
        $res = mysqli_query($con, "SELECT * FROM user WHERE id = {$this->userId}");
        $row = mysqli_fetch_assoc($res);
        ["id" => $id, "username" => $username, "email" => $email, "password" => $password, "register_at" => $registerAt] = $row;
        $user = new User($id, $username, $email, $password, $registerAt);
        return $user;
    }

}

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $registerAt;

    public function __construct($id, $username, $email, $password, $registerAt)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->registerAt = $registerAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRegisterAt()
    {
        return $this->registerAt;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return Todo[]
     */
    public function getTodoList(): array
    {

        $con = mysqli_connect("localhost", "root");
        mysqli_select_db($con, "tododb");
        $res = mysqli_query($con, "SELECT * FROM todo WHERE user_id = {$this->id}");

        $todoList = [];
        $limit = 100;
        while ($limit > 0 && $row = mysqli_fetch_assoc($res)) {
            [
                "id" => $id,
                "title" => $title,
                "description" => $desc,
                "create_at" => $createAt,
                "update_at" => $updateAt,
                "user_id" => $userId
            ] = $row;

            $todo = new Todo($id, $title, $desc, new MyDateTime($createAt), new MyDateTime($updateAt), $userId);
            $todoList[] = $todo;

            $limit--;
        }
        return $todoList;
    }

}

/**
 * @return Todo[]
 */
function getAllTodo(): array
{
    $con = mysqli_connect("localhost", "root");
    mysqli_select_db($con, "tododb");
    $res = mysqli_query($con, "SELECT * FROM todo");

    $todoList = [];
    $limit = 100;
    while ($limit > 0 && $row = mysqli_fetch_assoc($res)) {
//        $id = $res['id'];
//        $title = $res['title'];
        [
            "id" => $id,
            "title" => $title,
            "description" => $desc,
            "create_at" => $createAt,
            "update_at" => $updateAt,
            "user_id" => $userId
        ] = $row;

        $todo = new Todo($id, $title, $desc, new MyDateTime($createAt), new MyDateTime($updateAt), $userId);
        $todoList[] = $todo;

        $limit--;
    }
    return $todoList;
}

function saveTodo(Todo $todo)
{
    $con = mysqli_connect("localhost", "root");
    mysqli_select_db($con, "tododb");

    $id = $todo->getId();
    $newTitle = str_replace("'", "\\'", $todo->getTitle());
    $newDesc = str_replace("'", "\\'", $todo->getDescription());

    $sql = "
    UPDATE todo
    SET
        title = '$newTitle',
        description = '$newDesc',
        update_at = now()
    WHERE id = $id
    ";

    echo $sql;

    mysqli_query($con, $sql);
    return mysqli_affected_rows($con);
}

$todoList = getAllTodo();
$firstTodo = $todoList[0];
print_r($firstTodo);

$firstTodo->setTitle("Ann's Todo2");
$firstTodo->setDescription("this is description of second todo naaaa~");

saveTodo($firstTodo);

$user1 = $firstTodo->getOwner();
$x = $user1->getTodoList();

//$id = $_GET['id'];//1
//$sql = "SELECT * FROM Table1 WHERE id = $id";
////SELECT * FROM Table WHERE id = 1
//
//$id = $_GET['id'];//1; DROP TABLE Table1
//$id = $_GET['id'];//1; SELECT password as title FROM user
//$sql = "SELECT * FROM Table1 WHERE id = $id";
////SELECT * FROM Table WHERE id = 1; DROP TABLE Table1