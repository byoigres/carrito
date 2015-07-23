<?php

namespace Coppel\Yelu;

class BaseController
{
    public function __construct()
    {

    }

    public function render($view)
    {
        $content = $this->internalRender($view);

        $context = [
            "content" => $content
        ];

        echo $this->internalRender(Yelu::$config->layout, $context);
    }

    private function internalRender($view, $context = [])
    {
        ob_start();

        extract($context);

        include_once Yelu::$config->viewsDir . $view . ".php";

        $content = ob_get_contents();

        ob_end_clean();

        return $content;
    }
}
