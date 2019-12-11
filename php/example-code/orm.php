<?php

echo "<pre>";

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;

$capsule = new Capsule;

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

$todo = Capsule::table('todo')->get();
print_r($todo->toArray());

/**
 * Class News
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @mixin Model
 * @package App
 */
class Todo extends Model
{
    protected $table = 'todo';
}

$todo = Todo::query()->where("id", "=", 1);
print_r($todo->first()->toArray());
print_r($todo->toSql());