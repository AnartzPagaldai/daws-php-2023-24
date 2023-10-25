<?php
require "GET.php";
$arr = [
    "aaa" => [
        "nombre" => "aa",
        "apellido" => "alkdsjfk",
        "email" => "lakjdfalk",
        "contraseña" => "123"
    ],
    "ander11" => [
        "nombre" => "ander",
        "apellido" => "alkdsjfk",
        "email" => "lakjdfalk",
        "contraseña" => "123"
    ] 
];

validar($arr, GET("nombre"), GET("contra"));
function validar($arr, $nombre, $contra) {
    if (isset($arr[$nombre])) {
        echo "$nombre existe<br>";
        if ($arr[$nombre]["contraseña"] === $contra) {
            echo  "contraseña correcta";
        } else {
            echo "contrseña incorrecta";
        }
    }
}
