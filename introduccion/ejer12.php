<?php
function getValor(array $arr, int $index) {
    return $arr[$index];
}

function setValor(array &$arr, int $index, $valor) {
    $arr[$index] = $valor;
}

$arr = ["Paris", "Berlin", "Amsterdam", "Praga"];

echo getValor($arr, 1) . "<br>";
setValor($arr, 1, "alkdfljak");
echo getValor($arr, 1) . "<br>";
   