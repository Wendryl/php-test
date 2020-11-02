<?php

require '../vendor/autoload.php';

use App\Models\Carros;
use App\Controllers\Router;

$route = $_GET["fn"];
$method = $_SERVER["REQUEST_METHOD"];

$router = new Router();
$router->route($route, $method);
