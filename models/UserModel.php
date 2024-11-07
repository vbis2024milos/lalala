<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DBConnection;

class UserModel extends BaseModel{
    public int $user_id;

    public string $email;
    public string $first_name;
    public string $last_name;

    public function __construct()
    {
    }

    public function tableName()
    {
        return "user";
    }

    public function readColumns()
    {
        return ["email", "first_name", "last_name","user_id"];
    }
}