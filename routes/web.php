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
    //     'GET', '/resume',
    //     fn() => require "../resources/views/resume.php",
    // );


    $router->errorHandler(404, fn() => 'whoops!');
};


// $router->add("/", function() {
//     return require __DIR__ . '/../resources/views/about.php';
// });

// $router->add("/blogs", function() {
//     return require __DIR__ . '/../resources/views/blogs.php';
// });

// $router->add("/projects", function() {
//     return require __DIR__ . '/../resources/views/projects.php';
// });

// $router->add("/resume", function() {
//     return require __DIR__ . '/../resources/views/resume.php';
// });

// $router->dispatch($path);
