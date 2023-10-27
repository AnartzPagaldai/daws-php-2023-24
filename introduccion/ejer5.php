<?php $a = GET("a");
    $b = GET("b");

    if ($a != NULL && $b != NULL) {
        echo "$a - $b = " . $a - $b;
        echo "<br>$a + $b = " . $a + $b;
        echo "<br>$a > $b = " . ($a > $b ? "ture" : "false");
        echo "<br>$a <= $b = " . ($a <= $b ? "true" : "false");
    } else {
        echo "a o b no definido";
    }

    function GET($key) {
        if (!isset($_GET[$key])) {
            return NULL;
        } 
        return $_GET[$key];
    }
?>