<?php
$idioma = isset($_COOKIE["idioma"])? $_COOKIE["idioma"] : "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $idioma = $_POST["idioma"];
    setcookie("idioma", $_POST["idioma"], time() + 60);
}

require "index.view.php";
