<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DBConnection;

class ProductModel extends BaseModel
{
    public string $name;
    public string $description;
    public int $price;

    public function tableName()
    {
        return "products";
    }
}