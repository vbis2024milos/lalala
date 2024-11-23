<?php

namespace app\models;

use app\core\BaseModel;

class SessionUserModel extends BaseModel
{
    public int $user_role_id;
    public int $user_id;
    public  $first_name;
    public $last_name;
    public string $email;
    public string $role;

    public function getSessionData()
    {
        $query = "select user.user_id , user.first_name, user.last_name, user.email, role.name as role from user_role
left join user on user_role.user_id = user.user_id
left join role on user_role.role_id = role.role_id
where user.email = '$this->email'";

        $dbResult = $this->con->query($query);

        $this->mapData($dbResult->fetch_assoc());
    }

    public function tableName()
    {
        return '';
    }

    public function readColumns()
    {
        return [];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
    }
}