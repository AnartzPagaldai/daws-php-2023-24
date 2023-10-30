<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["nombre"] == -17) {
        foreach ($_COOKIE as $key => $valor) {
            setcookie($key, "", -1);
        }
    } else {
        setcookie($_POST["nombre"], $_POST["nombre"], time() + 100000);
    }
}

require "index.view.php";
