<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use Framework\Routing\Router;

$router = new Router();

$routes = require __DIR__ . '/../routes/web.php';
$routes($router);

print $router->dispatch();

// require __DIR__ . '/../routes/web.php';