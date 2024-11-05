<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DBConnection;

class UserModel extends BaseModel
{
    public string $email;
    public string $firstName;
    public string $lastName;

    public function __construct()
    {
    }

    public function tableName()
    {
        return "user";
    }
}