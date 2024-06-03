<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Múltiplos</title>
</head>
<body>
    <h1>Verificación de Múltiplos</h1>
    <form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["numero"];

        if ($num % 2 == 0 && $num % 4 != 0) {
            echo "<p>$num es múltiplo de dos</p>";
        } elseif ($num % 2 == 0 && $num % 4 == 0) {
            echo "<p>$num es múltiplo de dos y cuatro</p>";
        } else {
            echo "<p>$num no es múltiplo de dos</p>";
        }
    }
    ?>
</body>
</html>

