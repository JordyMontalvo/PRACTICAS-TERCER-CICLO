<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conexion.php";
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    

    $sql = $conexion->prepare("INSERT INTO PRODUCTO (nombre, precio, cantidad) VALUES (?, ?, ?)");
    $sql->execute([$nombre, $precio, $cantidad]);
    header("Location: /");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br>
        <form action="" method="POST">
    <legend>REGISTRO DE DATOS</legend>
    <div class="mb-3">
      <label for="nombre">NOMBRE</label>
         <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">PRECIO</label>
      <input type="text" id="precio" name="precio" class="form-control" required>
    </div>
    <div class="mb-3">
      <label  class="form-label">CANTIDAD</label>
      <input type="text" id="cantidad" name="cantidad" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="/" class="btn btn-secondary">Cancelar</a>

</form>
    </div>
</body>
</html>
