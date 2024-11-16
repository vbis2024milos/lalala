<?php

namespace app\models;

use app\core\BaseController;
use app\core\BaseModel;

class UserRoleModel extends BaseModel
{
    public int $user_role_id;
    public int $user_id;
    public int $role_id;

    public function tableName()
    {
        return 'user_role';
    }

    public function readColumns()
    {
        return ['user_role_id', 'user_id', 'role_id'];
    }

    public function editColumns()
    {
        return ['user_id', 'role_id'];
    }

    public function validationRules()
    {
        return [
            "user_id" => [self::RULE_REQUIRED],
            "role_id" => [self::RULE_REQUIRED]
        ];
    }
}