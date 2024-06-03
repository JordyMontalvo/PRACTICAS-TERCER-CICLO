<?php
// Si se envió un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la contraseña ingresada por el usuario
    $contrasena = $_POST["contrasena"];

    // Generar el hash para la contraseña
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Validar la contraseña ingresada contra el hash generado
    if (password_verify($contrasena, $hash)) {
        $mensaje = "Contraseña válida.";
    } else {
        $mensaje = "Contraseña inválida.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar y Validar Hash de Contraseña</title>
</head>
<body>
    <h1>Generar y Validar Hash de Contraseña</h1>
    <form method="post" action="">
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena">
        <button type="submit">Generar y Validar Hash</button>
    </form>
    <?php if(isset($hash)): ?>
        <p>Hash generado para la contraseña: <?php echo $hash; ?></p>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>
</body>
</html>
