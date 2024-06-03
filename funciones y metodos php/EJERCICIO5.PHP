<?php
// Generar una cadena aleatoria
$cadena_aleatoria = bin2hex(random_bytes(8));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Cadena Aleatoria</title>
</head>
<body>
    <h1>Generar Cadena Aleatoria</h1>
    <p>Cadena aleatoria: <?php echo $cadena_aleatoria; ?></p>
</body>
</html>



