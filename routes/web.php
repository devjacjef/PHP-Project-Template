<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * @var string Get the URI path without a query.
 */
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
var_dump($uri);

/**
 * @var array{route: string, path: string } Routes defined for the application.
 */
$routes = [
    '/' => 'resources/views/home.php',
    // TODO Find a better fix for this to be honest...
    '/learing-php/' => 'resources/views/home.php',
    '/about' => 'resources/views/about.php',
];

/**
 * When called, redirects to a page to show a response code that the user has encountered.
 * @param int $code the response code to display on the error page.
 * @return never Don't return anything.
 */
function abort($code)
{
    http_response_code($code);

    require 'resources/views/error.php';

    die();
}

/**
 * Summary of routeToController
 * @param string $uri The URI. 
 * @param array{string, string} $routes An associative array of routes.
 * @return string|void Returns the route to be processed or redirects to an error page.
 */
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
        return;
    }
}
