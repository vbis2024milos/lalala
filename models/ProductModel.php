<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DBConnection;

class ProductModel extends BaseModel
{
    public int $product_id;
    public string $name;
    public string $description;
    public int $price;

    public function tableName()
    {
        return "product";
    }

    public function readColumns()
    {
        return ["name", "description","product_id"];
    }

    public function editColumns()
    {
        return ["name", "description"];
    }
}