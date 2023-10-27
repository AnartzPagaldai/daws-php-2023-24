<?php
$arr = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

$lista = "<ul>";
$i = 0;
do {
    $lista .= "<li id=\"$i\"> {$arr[$i]} </li>"; 
    $i++;
} while ($i < count($arr));

$lista .= "</ul>";

echo $lista;
