<?php

class ProductList implements Iterator
{

    private $i = 0;

    private $names = [];

    public function add(string $name)
    {
        $this->names[] = $name;
    }

    public function getAllName(): array
    {
        return $this->names;
    }

    public function current()
    {
        return $this->names[$this->i];
    }

    public function next()
    {
        $this->i++;
    }

    public function key()
    {
        return $this->i;
    }

    public function valid()
    {
        return $this->i < count($this->names);
    }

    public function rewind()
    {
        $this->i = 0;
    }
}

echo "<pre>";

$productList = new ProductList();
$productList->add("pen");
$productList->add("pencil");
$productList->add("book");

//foreach ($productList->getAllName() as $name){
//    echo "$name\n";
//}
foreach ($productList as $name) {
    echo "$name\n";
}