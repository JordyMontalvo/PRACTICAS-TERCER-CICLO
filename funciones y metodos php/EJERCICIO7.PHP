<!DOCTYPE html>
<html>
<head>
    <title>Leer archivo con PHP</title>
</head>
<body>
    <?php
    $contenido = file_get_contents("C:\Users\usuario\Documents\ARCHIVOS\HOLA.txt");
    echo "<p>$contenido</p>";
    ?>
</body>
</html>
