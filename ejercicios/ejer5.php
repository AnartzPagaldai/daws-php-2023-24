<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = GET("a");
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
</body>
</html>