<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["usuario"])) {
            echo "Bienvenido, {$_GET["usuario"]}"; 
        } else {
            echo "no hay usuario";
        }
    ?> 
</body>
</html>