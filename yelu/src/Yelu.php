<?php

namespace Coppel\Yelu;

class Yelu
{
    public static $config;

    public function __construct()
    {

    }

    public function init($config)
    {
        self::$config = json_decode(json_encode($config), false);

        $router = new Router();
        $router->start();
    }
}
