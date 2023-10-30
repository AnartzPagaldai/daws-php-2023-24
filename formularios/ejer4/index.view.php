<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($nombre == "") { ?>
        <form action="" method="post">
            <label for="userName">User name:</label>
            <input type="text" id="userName" name="userName">
            <label for="pass">Password:</label>
            <input type="text" id="pass" name="pass">
            <input type="submit">
        </form>  
        <p><?= $mensaje ?></p>
    <?php } else { ?>
        <h1>Bienvenido <?= "$nombre $apellido"?></h1>
    <?php } ?>
</body>
</html>