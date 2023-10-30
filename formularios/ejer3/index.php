<?php
$num = "";
$cont = "";
if (isset($_POST["num"])) {
    $num = $_POST["num"];
    $cont = 0;
    for ($i = 0; $i < 20; $i++) {
        echo $num . "=="  . random_int(1,10). "<br>";
        if ($num == random_int(1, 10)) {
            $cont++;
        }
    }
}

require "index.view.php";