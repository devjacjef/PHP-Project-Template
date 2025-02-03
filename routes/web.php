<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Framework\Routing\Router;

// $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

return function(Router $router) {
    $router->add(
        'GET', '/',
        fn() => require "../resources/views/about.php",
    );

    $router->add(
        'GET', '/blogs',
        fn() => require "../resources/views/blogs.php",
    );

    $router->add(
        'GET', '/projects',
        fn() => require "../resources/views/projects.php",
    );

    // $router->add(
    //     'GET', '/products/{page?}',
    //     function () use ($router) {
    //         $parameters = $router->current()->parameters();
    //         $parameters['page'] ??= 1;
            
    //         return "products for page {$parameters['page']}";
    //     }
    // )->name('product-list');

    // $router->route('product-list', ['page' => 2]);

    $router->errorHandler(404, fn() => 'whoops!');
};