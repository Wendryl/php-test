<?php

require '../vendor/autoload.php';

use App\Models\Carros;
use App\Controllers\Router;

if (isset($_GET["fn"])) {

    $route = $_GET["fn"];
    $method = $_SERVER["REQUEST_METHOD"];

    $router = new Router();
    $router->route($route, $method);
}