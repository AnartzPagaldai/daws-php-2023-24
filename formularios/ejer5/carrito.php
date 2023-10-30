<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="">volver</a>
    <ul>
        <?php foreach ($carrito as $producto) { ?> 
            <li>
                <strong><?= $producto["nombre"] ?></strong>
                <p>Precio: $<?= $producto["precio"]?></p>
            </li>
        <?php } ?>
    </ul> 
    <h1>Precio total = <?= $precioTotal ?></h1>
</body>
</html>