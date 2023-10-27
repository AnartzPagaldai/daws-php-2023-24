<?php
$temp = 0;
if (isset($_POST["temperatura"])) {
    $temp = intval($_POST["temperatura"]);
    if ($_POST["unidad"] === "celcius") {
        $temp = ($temp * 9 / 5) + 32;
    } else {
        $temp = ($temp - 32) * 5 / 9;
    }
} 

require "index.view.php";
