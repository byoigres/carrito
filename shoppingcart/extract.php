<?php
$datos = [
    "hola" => "mundo",
    "cantidad" => 12,
    "verdadero" => true
];

extract($datos);

var_dump($hola, $cantidad, $verdadero);
