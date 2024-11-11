<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DBConnection;

class UserModel extends BaseModel{
    public int $user_id;

    public string $email = '';
    public string $first_name = "";
    public string $last_name = "";

    public function tableName()
    {
        return "user";
    }

    public function readColumns()
    {
        return ["email", "first_name", "last_name","user_id"];
    }

    public function editColumns()
    {
        return ["email", "first_name", "last_name"];
    }

    public function validationRules(): array
    {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "first_name" => [self::RULE_REQUIRED],
            "last_name" => [self::RULE_REQUIRED],
        ];
    }
}