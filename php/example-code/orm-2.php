<?php

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as MyCapsule;

$capsule = new MyCapsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'tododb',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$todo = MyCapsule::table("todo")->get();

//https://laravel.com/docs/5.0/eloquent

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';
    public $timestamps = false;
}

$todo2 = Todo::where("id", 2)->first();
print_r($todo2->toArray());
$todo2->title = "Second Todo by Eloquent";
$todo2->save();

$todo11 = new Todo();
$todo11->title = "Create From Eloquent";
$todo11->description = "...";
$todo11->create_at = date("Y-m-d H:i:s");
$todo11->update_at = date("Y-m-d H:i:s");
$todo11->user_id = 1;
$todo11->save();