<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\AuthController;
use app\controllers\HomeController;
use app\controllers\ProductController;
use app\controllers\UserController;
use app\core\Application;

$app = new Application();

$app->router->get("/", [HomeController::class, 'home']);

$app->router->get("/getUser", [UserController::class, 'readUser']);
$app->router->get("/users", [UserController::class, 'readAll']);

$app->router->get("/updateUser", [UserController::class, 'updateUser']);
$app->router->post("/processUpdateUser", [UserController::class, 'processUpdateUser']);

$app->router->get("/createUser", [UserController::class, 'createUser']);
$app->router->post("/processCreateUser", [UserController::class, 'processCreateUser']);

$app->router->post("/processUpdate", [ProductController::class, 'processUpdate']);
$app->router->get("/update", [ProductController::class, 'update']);
$app->router->get("/products", [ProductController::class, 'readAll']);

$app->router->get("/registration", [AuthController::class, 'registration']);
$app->router->post("/processRegistration", [AuthController::class, 'processRegistration']);
$app->router->get("/login", [AuthController::class, 'login']);
$app->router->get("/processLogout", [AuthController::class, 'processLogout']);
$app->router->post("/processLogin", [AuthController::class, 'processLogin']);



$app->run();