<?php

namespace App\Routing;

use Closure;

class Router
{
    private array $routes = [];

    public function add(string $path, Closure $handler): void
    {
        $this->routes[$path] = $handler;
    }

    public function dispatch(string $path): void
    {
        foreach ($this->routes as $route => $handler ) {
            $pattern = preg_replace("#\{\w+\}#", "([^\/]+)", $route);

            if (preg_match("#^$pattern$#", $path, $matches)) {
                array_shift($matches);

                call_user_func_array($handler, $matches);

                return;
            }
        }

        echo "Page not found";
    }

    // public function get($uri, $action = null) {}
    // public function post($uri, $action = null) {}
    // public function put($uri, $action = null) {}
    // public function patch ($uri, $action = null) {}
    // public function delete($uri, $action = null) {}
    // public function view($uri, $view, $data = [], $status = 200, array $headers = []) {}
    // public function addRoute($methods, $uri, $action) {}
    // public function createRoute($methods, $uri, $action) {}
    // public function newRoute($methods, $uri, $action) {}

}
