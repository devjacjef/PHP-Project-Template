<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

// TODO Research and refactor this snippet of code to better understand what it does...
/**
 * @var string Get the URI path without a query.
 */
$uri = rtrim(parse_url($_SERVER['REQUEST_URI'])['path']);

$projectPrefix = '/PHP-Project-Template';

if (strpos($uri, $projectPrefix) === 0) {
    $uri = substr($uri, strlen($projectPrefix));
    if ($uri === '') $uri = '/';
}

// Debugging purposes
//var_dump($uri);

/**
 * @var array{route: string, path: string } Routes defined for the application.
 */
$routes = [
    '/' => __DIR__ . '/../resources/views/about.php',
    '/projects' => __DIR__ . '/../resources/views/projects.php',
    '/blogs' => __DIR__ . '/../resources/views/blogs.php',
    '/test' => __DIR__ . '/../resources/views/test.php',
    '/resume' => __DIR__ . '/../resources/views/resume.php'
];

/**
 * When called, redirects to a page to show a response code that the user has encountered.
 * @param int $code the response code to display on the error page.
 * @return never Don't return anything.
 */
function abort($code)
{
    http_response_code($code);

    require __DIR__ . '/../resources/views/error.php';

    die();
}

/**
 * Summary of routeToController
 * @param string $uri The URI. 
 * @param array{string, string} $routes An associative array of routes.
 * @return string|void Routes to the request URI or redirects to an error page.
 */
function routeToController($uri, $routes)
{
    // Debugging purposes...
    // echo $uri . '<br>';
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
        return;
    }
}
