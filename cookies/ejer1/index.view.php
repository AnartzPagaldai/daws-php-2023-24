<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($_COOKIE as $key => $usuario) { ?>
            <li><?= $usuario ?></li>
        <?php } ?>
    </ul>
    <form action="" method="post">
        <label for="nombre">nombre:</label>
        <input type="text" id="nombre" name="nombre">        
        <input type="submit" value="guardar">
    </form>
</body>
</html>