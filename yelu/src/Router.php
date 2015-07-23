<?php

namespace Coppel\Yelu;

class Router
{
    private $path;

    private $method;

    public function __construct()
    {
        $this->path = filter_input(INPUT_SERVER, 'REQUEST_URI');
        $this->method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
    }

    public function start($routes, $controllerNamespace)
    {
        foreach($routes as $route) {
            if ($route['method'] === $this->method && $route['path'] === $this->path) {
                $class = "{$controllerNamespace}{$route['handler']['class']}";
                $handler = new $class();
                $handler->$route['handler']['method']();
# call__user_func_array(array($handler, $route['handler']['method']), [])
# call_user_func(array($handler, $route['handler']['method']), []);
            } else {
                echo "La ruta $this->method $this->path NO exitste!";
            }
        }
    }
}
