<?php
require "GET.php";
$result = 0;
for ($i = 0; $i <= GET("num"); $i++) {
    $result += $i; 
}
echo $result;