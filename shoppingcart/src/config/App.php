<?php

return [
    "baseDir" => dirname(__DIR__),
    "viewsDir" => "./src/views/",
    "layout" => "layout",
    "namespaces" => require_once "./src/config/Namespaces.php",
    "routes" => require_once "./src/config/Routes.php",
    "database" => require_once "./src/config/Database.php"
];
