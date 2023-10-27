<?php

$arr = [
    "aaa" => [
        "nombre" => "aa",
        "apellido" => "alkdsjfk",
        "email" => "lakjdfalk"
    ],
    "ander11" => [
        "nombre" => "ander",
        "apellido" => "alkdsjfk",
        "email" => "lakjdfalk"
    ] 
];
getDatos($arr, "ander11", "apellido");
function getDatos($arr, $nombre, $dato) {
    echo "$dato = {$arr[$nombre][$dato]}";
}