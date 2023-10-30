<?php

$usuarios = [
    "user1" => [
        "nombre" => "Ane",
        "apellidos" => "López",
        "password" => "123Abc",
    ],
    "user2" => [ 
        "nombre" => "Amaia",
        "apellidos" => "Otsoa",
        "password" => "456Xyz"
    ]
];

$mensaje = "";
$nombre = "";
$apellido = "";

if (isset($_POST["userName"])) {
    if (isset($usuarios[$_POST["userName"]])) {
        $usuario = $usuarios[$_POST["userName"]];
        if ($usuario["password"] == $_POST["pass"]) {
            $nombre = $usuario["nombre"];
            $apellido = $usuario["apellidos"];
        } else {
            $mensaje = "contraseña incorrecta";
        }
    } else {
        $mensaje = "el usuario no existe";
    }
} 

require "index.view.php";