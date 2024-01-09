<?php
header("Content-Type: application/json; charset=UTF-8");

include "app/Routes/ProductRoute.php";

use app\Routes\ProductRoute;

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$productRoute = new ProductRoute();
$productRoute->handle($method, $path);
