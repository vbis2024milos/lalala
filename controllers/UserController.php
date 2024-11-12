<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\UserModel;
use app\core\DBConnection;
use app\models\ProductModel;

class UserController extends BaseController
{
    public function readUser()
    {
        $model = new UserModel();
        $model->one("where user_id = 2");

        $this->view->render('getUser', 'main', $model);
    }

    public function readAll()
    {
        $model = new UserModel();
        $result = $model->all("");

        $this->view->render('users', 'main', $result);
    }

    public function updateUser()
    {
        $model = new UserModel();
        $model->mapData($_GET);
        $model->one("where user_id = $model->user_id");

        $this->view->render('updateUser', 'main', $model);
    }

    public function processUpdateUser()
    {
        $model = new UserModel();
        $model->mapData($_POST);
        $model->update("where user_id = $model->user_id");

        header("location:" . "/users");
    }
}