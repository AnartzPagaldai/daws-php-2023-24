<?php
    require "GET.php";
    echo multiplicar(GET("num1"), GET("num2"));

    function multiplicar($num1, $num2): int|float{
        return $num1 * $num2;
    }
?>