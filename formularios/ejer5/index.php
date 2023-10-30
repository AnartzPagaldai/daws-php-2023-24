<?php
$productos = [
    [
        "id" => 1,
        "precio" => 10.00,
        "nombre" => "slkfj"
    ], 
    [
        "id" => 2,
        "precio" => 15.00,
        "nombre" => "pata"
    ]
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $carrito = [];
    $precioTotal = 0;
    $cont = 0;
    foreach ($productos as $producto) {
        $cantidad = $_POST["cantidad_{$producto["id"]}"];
        if ($cantidad != 0) {
            $carrito[$cont] = [
                "nombre" => $producto["nombre"],
                "cantidad" => $cantidad,
                "precio" => $cantidad * $producto["precio"]
            ]; 
            $precioTotal += $carrito[$cont]["precio"];
            $cont++;
        }
    }
    require "carrito.php";
} else if ($_SERVER["REQUEST_METHOD"] == "GET"){
    require "index.view.php";
}
