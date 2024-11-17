<?php

namespace app\models;

use app\core\BaseModel;

class AuthModel extends BaseModel
{
    public int $user_id;
    public string $email = '';
    public string $password = '';

    public function tableName(): string
    {
        return 'user';
    }

    public function readColumns(): array
    {
        return ['user_id', 'email', 'password'];
    }

    public function editColumns(): array
    {
        return ['email', 'password'];
    }

    public function validationRules(): array
    {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "password" => [self::RULE_REQUIRED]
        ];
    }
}