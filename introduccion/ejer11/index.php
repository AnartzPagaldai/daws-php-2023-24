<?php
function concat($ca1 = "ho", $ca2 = "la") {
    return $ca1 . $ca2;
}

$txt = concat();
require "index.view.php";