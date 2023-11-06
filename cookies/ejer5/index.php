<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["usuario"];
    $arr = executeSatement(
        "select nombre from usuarios where nombre = :usuario and contrasenna = :contra",
        ["usuario"=> $nombre, "contra"=>$_POST["contrasena"]]
    );

    if ($arr == NULL) {
        echo "nombre o usuario incorrecto";
    } else {
        session_start();
        $_SESSION["nombre"] = $nombre;
    }
}

function executeSatement($strStatement, $array) {
    $db = connect("127.0.0.1","bd1", "root", "");
    $st = $db->prepare($strStatement);
    $st->execute($array);
    return $st->fetchAll();
    $db = null;
}

function connect($host, $dbname, $user, $pass){
    try {
    $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    return $dbh;
    }
    catch(PDOException $e) {
    echo $e->getMessage();
    }
}

require "index.view.php";