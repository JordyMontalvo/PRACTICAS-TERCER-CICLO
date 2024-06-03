<?php
$contrasena = "123";
$hash = password_hash($contrasena, PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generación de Hash de Contraseña</title>
</head>
<body>
    <h1>Generación de Hash de Contraseña</h1>
    <p>Contraseña original: <?php echo $contrasena; ?></p>
    <p>Hash de la contraseña: <?php echo $hash; ?></p>
</body>
</html>



