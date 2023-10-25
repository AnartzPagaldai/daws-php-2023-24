<?php
$arr = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

$lista = "<ul>";
$i = 0;
while ($i < count($arr)) {
    $lista .= "<li id=\"$i\"> {$arr[$i]} </li>"; 
    $i++;
}

$lista .= "</ul>";

echo $lista;