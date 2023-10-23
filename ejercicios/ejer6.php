<?php
    echo multiplicar(GET("num1"), GET("num2"));

    function multiplicar($num1, $num2): int|float{
        return $num1 * $num2;
    }
    function GET($key) {
        if (!isset($_GET[$key])) {
            return NULL;
        } 
        return $_GET[$key];
    }
?>