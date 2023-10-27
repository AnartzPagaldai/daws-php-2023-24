<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="temperatura">
        <select name="unidad" id="">
            <option value="celcius">celcius</option>
            <option value="farenheit">farenheit</option>
        </select>
        <input type="submit">
    </form>
    <?= $temp ?>
</body>
</html>