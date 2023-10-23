<?php
    require "GET.php";
    $array = json_decode((GET("nums") ? GET("nums") : "[]")); // ?nums=[1,2,5] 
    echo multiplicar2($array) . "<br>";
    function multiplicar2($nums): int|float {
        $result = 1;
        foreach ($nums as $num) {
            $result *= $num;
        }
        return $result;
    }

    echo multiplicar1(1, 4, 5);
    function multiplicar1(...$nums): int|float {
        $result = 1;
        foreach ($nums as $num) {
            $result *= $num;
        }
        return $result;
    }
?>