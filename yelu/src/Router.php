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

    public function start()
    {
        foreach(Yelu::$config->routes as $route) {
            if ($route->method === $this->method && $route->path === $this->path) {
                $class = Yelu::$config->namespaces->controller . $route->handler->class;

                $handler = new $class();
                $method = $route->handler->method;
                $handler->$method();
            } else {
                echo "La ruta $this->method $this->path NO exitste!";
            }
        }
    }
}
