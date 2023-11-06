<?php
require "../mysql.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!executeSatement("insert into listCompra (nombre) values (:nombre)"
    , ["nombre" => $_POST["producto"]])) {
       echo "error al insetar";
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        if (!executeSatement("delete from listCompra where id = :id", 
            ["id" => $_GET["id"]])
        ) {
            echo "error al borrar producto";
        }
    } else if (isset($_GET["borrar"])) {
        if (!executeSatement("delete from listCompra")) {
            echo "erro al vacial lista";
        }
    }
}



$lista = select("select * from listCompra");

require "index.view.php";