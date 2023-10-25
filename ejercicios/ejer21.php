<?php
require "GET.php";
$result = 0;
for ($i = 0; $i <= GET("num"); $i++) {
    if ($i % 2 == 0) {
        $result += $i; 
        if ($result > 100) {
            $result -= $i;
        }
    }
}
echo $result;