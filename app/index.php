<?php

require '../vendor/autoload.php';

use App\Models\Carros;
use App\Controllers\Router;

$router = new Router();


if (isset($_GET["fn"])) {

    $route = $_GET["fn"];
    $method = $_SERVER["REQUEST_METHOD"];

    if (isset($_GET["id"])) {
        $params["id"] = $_GET["id"];
        $router->route($route, $method, $params);
        return;
    }

    $router->route($route, $method);
}