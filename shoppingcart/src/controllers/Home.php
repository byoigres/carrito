<?php

namespace Coppel\Controllers;

use Coppel\Yelu\BaseController;

class Home extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function homePage()
    {
        $this->render("home");
    }
}
