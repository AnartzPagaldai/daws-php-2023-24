<?php
$animales = [];
$colores = [];

echo count($animales) . "<br>";
echo count($colores) . "<br>";

array_push($animales, "alk");
array_unshift($colores, "akd");

$arr = array_merge($animales, $colores);
printl($animales[0]);
printl($colores[0]);
printl($arr[0]);


function printl($txt = 0) {
    echo $txt . '<br>';
}