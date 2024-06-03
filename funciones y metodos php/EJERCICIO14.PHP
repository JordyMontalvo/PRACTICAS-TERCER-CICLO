<?php
// Obtener el nombre del servidor
$nombre_servidor = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Nombre del Servidor</title>
</head>
<body>
    <h1>Obtener Nombre del Servidor</h1>
    <p>El nombre del servidor es: <?php echo $nombre_servidor; ?></p>
</body>
</html>
