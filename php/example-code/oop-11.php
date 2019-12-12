<?php

interface IProductData
{
    public function getTitle();

    public function getNameList();
}

function render(IProductData $data)
{
    ?>
    <div>
        <h1><?= $data->getTitle() ?></h1>
        <ul>
            <?php foreach ($data->getNameList() as $name): ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}

class TempMockData implements IProductData {

    public function getTitle()
    {
        return "Test Product";
    }

    public function getNameList()
    {
        return [
            "pen",
            "pencil",
            "book",
        ];
    }
}

class RealData implements IProductData {

    public function getTitle()
    {
        return "Real Product Data";
    }

    public function getNameList()
    {
        //DB
        return ["product-1", "product-2"];
    }
}

render(new RealData());