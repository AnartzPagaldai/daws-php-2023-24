<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($lista as $producto) { ?>
            <li><?= $producto["nombre"]?>(<a href="/ejer1?id=<?= $producto["id"]?>">Eliminar</a>)</li>
        <?php } ?>
    </ul>  

    <form action="" method="post" >
        <label for="producto">producto</label>
        <input type="text" id="producto" name="producto">
        <input type="submit">
    </form>
    <a href="/ejer1?borrar">vaciar lista</a>
</body>
</html>