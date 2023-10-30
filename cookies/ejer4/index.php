<?php

session_start();
$lista = "";
if (!isset($_SESSION["lista"])) {
    $_SESSION["lista"] = [];
}

$lista = &$_SESSION["lista"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lista[count($lista)] = $_POST["nombre"];
}

require "index.view.php";
