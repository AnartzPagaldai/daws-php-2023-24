<?php

$arr = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

$lista = "<ul>";
for ($i = 0; $i < count($arr); $i++) {
    $lista .= "<li id=\"$i\"> {$arr[$i]} </li>";
}

$lista .= "</ul>";

echo $lista;