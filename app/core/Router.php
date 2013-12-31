<?php

namespace App\Core;

class Router {
    private $routes = [];
    private $data = [];

    public function load($file)
    {
        $this->data = require $file;
        $this->addRoutes();
    }

    public function addRoutes() {
        foreach ($this->data as $data) {
            $this->routes[] = [
                'http_method' => $data['http_method'],
                'url' => $data['url'],
                'controllerName' => $data['controllerName'],
                'methodName' => $data['methodName'],
            ];
        }
    }

    public function dispatch() {
        $url = $_SERVER['REQUEST_URI'];
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $urlParts = explode('?', $url);
        $url = $urlParts[0];
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['http_method'] === $httpMethod) {
                $controllerName = ucfirst($route['controllerName']);
                $methodName = $route['methodName'];
                $controller = $this->getContainer($controllerName);
                $controller->$methodName();
                return;
            }
        }
        // Handle 404 error
        http_response_code(404);
        echo "404 Not Found";
    }

    public function getContainer($className)
    {
        $container = new ServiceContainer;
        return $container->get($className);
    }
}