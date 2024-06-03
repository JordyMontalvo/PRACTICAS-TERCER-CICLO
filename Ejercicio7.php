<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Sueldo</title>
</head>
<body>
    <h1>Calculadora de Sueldo</h1>
    <form method="post" action="">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="sueldo">Sueldo:</label>
        <input type="number" id="sueldo" name="sueldo" required><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $sueldo = $_POST["sueldo"];

        // Calculamos el descuento del 5%
        $descuento = $sueldo * 0.05;

        // Calculamos la bonificación del 9%
        $bonificacion = $sueldo * 0.09;

        // Calculamos el sueldo final
        $sueldo_final = $sueldo - $descuento + $bonificacion;

        echo "<h2>Resultados</h2>";
        echo "<p>Nombre completo: $nombre</p>";
        echo "<p>Descuento (5%): $descuento</p>";
        echo "<p>Bonificación (9%): $bonificacion</p>";
        echo "<p>Sueldo final: $sueldo_final</p>";
    }
    ?>
</body>
</html>
