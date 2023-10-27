<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" value=<?= $num1 ?>>
        <select name="operacion" id="">
            <option value="+" <?= selected($operacion, "+") ?>>+</option>
            <option value="-" <?= selected($operacion, "-") ?>>-</option>
            <option value="/" <?= selected($operacion, "/") ?>>/</option>
            <option value="*" <?= selected($operacion, "*") ?>>*</option>
        </select>
        <input type="number" name="num2" value=<?= $num2 ?>>
        <t> = <?= $res ?></t>
        <br>
        <input type="submit"> 
    </form> 
</body>
</html>