<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero1">Ingrese el número 1:</label>
        <input type="text" id="numero1" name="numero1"><br>

        <label for="numero2">Ingrese el número 2:</label>
        <input type="text" id="numero2" name="numero2"><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["numero1"];
        $n2 = $_POST["numero2"];

        // Verificar si se ingresaron valores numéricos
        if (is_numeric($n1) && is_numeric($n2)) {
            // Realizar operaciones aritméticas
            echo "Suma: " . ($n1 + $n2) . "<br>";
            echo "Resta: " . ($n1 - $n2) . "<br>";
            echo "Multiplicación: " . ($n1 * $n2) . "<br>";
            echo "División: " . ($n1 / $n2) . "<br>";
        } else {
            echo "Por favor, ingrese valores numéricos válidos.";
        }
    }
    ?>
</body>
</html>
