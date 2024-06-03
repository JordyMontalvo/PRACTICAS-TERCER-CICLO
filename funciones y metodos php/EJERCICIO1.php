<?php
    $num = -10;
    $abs_num = abs($num);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Absoluto</title>
</head>
<body>
    <h2>Calculadora de Valor Absoluto</h2>
    <form>
        <label for="num">Ingrese un número:</label>
        <input type="number" id="num" name="num" value="<?php echo $num; ?>" readonly>
        <br>
        <label for="abs_num">Valor Absoluto:</label>
        <input type="number" id="abs_num" name="abs_num" value="<?php echo $abs_num; ?>" readonly>
    </form>
</body>
</html>
