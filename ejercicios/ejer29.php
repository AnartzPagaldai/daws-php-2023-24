<?php

$agenda = [
    [
    "nombre" => "Amaia",
    "apellidos" =>"Gorbea Jainaga" ,
    "telefono"=>"945111111" ,
    "email"=>"agorbea@php.net"
    ],
    [
    "nombre" => "Amaia",
    "apellidos" =>"Gorbea Jainaga" ,
    "telefono"=>"945111111" ,
    "email"=>"agorbea@php.net"
    ]
];
echo "nombre apellidos telefono email<br>";
foreach ($agenda as $p) {
    echo "{$p["nombre"]} {$p["apellidos"]} {$p["telefono"]} {$p["email"]}<br>";
}