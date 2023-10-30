<!DOCTYPE html>
<html>
<head>
    <title>Tienda en Línea</title>
</head>
<body>
    <h1>Catálogo de Productos</h1>
    <form action="" method="post">
        <ul>
            <?php foreach ($productos as $producto) { 
                $nameCantidad = "cantidad_" . $producto["id"]?>
                <li>
                    <strong><?= $producto["nombre"] ?></strong>
                    <p>Precio: $<?= $producto["precio"]?></p>
                    <label for=<?= $nameCantidad ?>>Cantidad:</label>
                    <input type="number" name=<?= $nameCantidad ?> id=<?= $nameCantidad ?> value="0">
                </li>
            <?php }?>
        </ul>
        <input type="submit" value="Agregar al Carrito">
    </form>
</body>
</html>
