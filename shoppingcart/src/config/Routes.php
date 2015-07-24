<?php
return [
    [
        "method" => "GET",
        "path" => "/",
        "handler" => [
            "class" => "Home",
            "method" => "homePage"
        ]
    ],
    [
        "method" => "GET",
        "path" => "/items",
        "handler" => [
            "class" => "Item",
            "method" => "listPage"
        ]
    ]
];
