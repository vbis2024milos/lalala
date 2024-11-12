<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ProductModel;

class ProductController extends BaseController
{
    public function update()
    {
        $model = new ProductModel();
        $model->mapData($_GET);
        $model->one("where product_id = $model->product_id");

        $this->view->render('updateProduct', 'main', $model);
    }

    public function processUpdate()
    {
        $model = new ProductModel();
        $model->mapData($_POST);
        $model->update("where product_id = $model->product_id");

        header("location:" . "/products");
    }

    public function readAll()
    {
        $model = new ProductModel();
        $result = $model->all("");

        $this->view->render('products', 'main', $result);
    }
}