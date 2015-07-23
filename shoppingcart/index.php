<?php

require_once "./vendor/autoload.php";

$yelu = new Coppel\Yelu\Yelu();

$yelu->init(require_once './src/config/App.php');
