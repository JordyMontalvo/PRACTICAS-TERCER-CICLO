<?php
    $angulo = 0.5;
    $arco_coseno = acos($angulo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arco Coseno</title>
</head>
<body>
    <h2>Calculadora de Arco Coseno</h2>
    <form>
        <label for="angulo">Ingrese un ángulo (en radianes):</label>
        <input type="number" id="angulo" name="angulo" step="any" value="<?php echo $angulo; ?>" readonly>
        <br>
        <label for="arco_coseno">Arco Coseno:</label>
        <input type="number" id="arco_coseno" name="arco_coseno" step="any" value="<?php echo $arco_coseno; ?>" readonly>
    </form>
</body>
</html>
