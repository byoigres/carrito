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
}
