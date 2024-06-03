<?php
// Obtener información del archivo
$informacion_archivo = pathinfo("C:\Users\usuario\Documents\ARCHIVOS\HOLA.txt");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Información del Archivo</title>
</head>
<body>
    <h1>Obtener Información del Archivo</h1>
    <p>Nombre del archivo: <?php echo $informacion_archivo['basename']; ?></p>
    <p>Directorio del archivo: <?php echo $informacion_archivo['dirname']; ?></p>
    <p>Extensión del archivo: <?php echo $informacion_archivo['extension']; ?></p>
</body>
</html>
