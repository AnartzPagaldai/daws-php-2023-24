<?php
$arr = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

$lista = "<ul>";
$i = 0;
foreach ($arr as $dato) {
    $lista .= "<li> {$dato} </li>"; 
} 

$lista .= "</ul>";

echo $lista;
