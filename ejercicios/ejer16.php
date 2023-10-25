<?php

require "GET.php";


echo fun(GET("num1"), GET("num2"));


function fun($num1, $num2) {
    if ($num1 === $num2) {
        return $num1 * $num2;
    }
    return $num1 + $num2;
}