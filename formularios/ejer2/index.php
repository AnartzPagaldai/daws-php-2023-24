<?php
$res = 0;
$num1 = 0;
$num2 = 0;
$operacion = "";
if (isset($_POST["num1"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    $res =  $num1 . $operacion . $num2;
    $res = eval("return $res;");
}

require "index.view.php";

function selected($op1, $op2) {
    return ($op1 == $op2 ? "selected" : "");
}