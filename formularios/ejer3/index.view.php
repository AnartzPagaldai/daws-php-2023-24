<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num" value=<?= $num ?>>
        <input type="submit">
    </form> 
    <?php if ($cont !== "") {?>
        <p> Tu numero sale <?= $cont ?> veces</P>
    <?php } ?>
</body>
</html>