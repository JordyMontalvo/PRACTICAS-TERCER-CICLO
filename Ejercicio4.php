<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Laboral</title>
</head>
<body>
    <h1>Información Laboral</h1>
    <form method="post" action="">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="estado_civil">Estado civil:</label>
        <input type="text" id="estado_civil" name="estado_civil" required><br>

        <label for="horas_trabajadas">Horas trabajadas:</label>
        <input type="number" id="horas_trabajadas" name="horas_trabajadas" required><br>

        <label for="pago_por_hora">Pago por hora:</label>
        <input type="number" id="pago_por_hora" name="pago_por_hora" required><br>

        <button type="submit">Calcular Sueldo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Nom = $_POST["nombre"];
        $est = $_POST["estado_civil"];
        $horaT = $_POST["horas_trabajadas"];
        $PxH = $_POST["pago_por_hora"];
        $Sueldo = $horaT * $PxH;

        echo "<h2>Resultados</h2>";
        echo "<p>Nombres y Apellidos: $Nom</p>";
        echo "<p>Estado civil: $est</p>";
        echo "<p>Horas trabajadas: $horaT</p>";
        echo "<p>Pago por hora: $PxH</p>";
        echo "<p>Sueldo: $Sueldo</p>";
    }
    ?>
</body>
</html>
