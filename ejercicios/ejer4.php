<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"]; 
        } else {
            $nombre = "anonimo";
        }

        if (isset($_GET["edad"])) {
            $edad = $_GET["edad"];
        } else {
            $edad = "undefined";
        }
        echo "mi amigo $nombre tiene $edad años";
    ?>
</body>
</html>