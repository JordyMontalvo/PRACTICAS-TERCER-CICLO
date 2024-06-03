<?php
// Definimos la variable para almacenar el correo ingresado por el usuario
$email = "";

// Definimos el mensaje inicial como vacío
$mensaje = "";

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el correo ingresado por el usuario
    $email = $_POST["email"];

    // Validamos el correo electrónico
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "Correo electrónico válido.";
    } else {
        $mensaje = "Correo electrónico inválido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Correo Electrónico</title>
</head>
<body>
    <h1>Validación de Correo Electrónico</h1>
    <form method="post" action="">
        <label for="email">Correo electrónico:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
        <button type="submit">Validar</button>
    </form>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
