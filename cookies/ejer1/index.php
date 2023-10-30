<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie($_POST["nombre"], $_POST["nombre"], time() + 100000);
}

require "index.view.php";