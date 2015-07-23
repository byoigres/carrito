<?php

namespace Coppel\Yelu;

class BaseController
{
    public function __construct()
    {
        echo __METHOD__;
    }

    public function render($view)
    {
            require_once Yelu::$config->viewsDir . $view;
    }
}
