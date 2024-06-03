<?php
    $str = "HOLA'MUNDO ";
    $quoted_str = addslashes($str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización de Cadena</title>
</head>
<body>
    <h2>Cotización de Cadena</h2>
    <p>Texto original: <?php echo $str; ?></p>
    <p>Texto con comillas escapadas: <?php echo $quoted_str; ?></p>
</body>
</html>
