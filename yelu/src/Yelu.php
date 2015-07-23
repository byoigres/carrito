<?php

namespace Coppel\Yelu;

class Yelu
{
    private $config;

    public function __construct()
    {

    }

    public function init($config)
    {
        $this->config = $config;

        #$className = "{$this->config['namespaces']['controller']}Home";

        #$home = new $className();

        $router = new Router();

        $router->start($routes->config['routes']);
    }
}
