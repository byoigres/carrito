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

    public function start($routes)
    {
        foreach($routes as $route) {
            if ($route['method'] === $this->method && $route['path'] === $this->path) {
                echo "La ruta $this->method $this->path existe!";
            } else {
                echo "La ruta $this->method $this->path NO exitste!";
            }
        }
    }
}
