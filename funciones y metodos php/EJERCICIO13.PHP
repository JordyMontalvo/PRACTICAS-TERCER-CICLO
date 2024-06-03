<?php
// Obtenemos la IP del cliente
$ip_cliente = $_SERVER['REMOTE_ADDR'];

// Obtenemos el agente de usuario del cliente
$agente_usuario = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Cliente</title>
</head>
<body>
    <h1>Información del Cliente</h1>
    <p>IP del cliente: <?php echo $ip_cliente; ?></p>
    <p>Agente de Usuario del cliente: <?php echo $agente_usuario; ?></p>
</body>
</html>
