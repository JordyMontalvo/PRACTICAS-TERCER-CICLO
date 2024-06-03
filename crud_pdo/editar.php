<?php
if(isset($_GET['id']) && !empty($_GET['id'])) {
    include "conexion.php"; 
    if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['cantidad'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        
        $sql = $conexion->prepare("UPDATE PRODUCTO SET nombre = ?, precio = ?, cantidad = ? WHERE id = ?");
        $resultado = $sql->execute([$nombre, $precio, $cantidad, $id]);
        if ($resultado) {
            header("Location: index.php");
            exit(); 
        }
    } else {
        $id = $_GET['id'];
        $sql = $conexion->prepare("SELECT * FROM PRODUCTO WHERE id = ?");
        $sql->execute([$id]);
        $producto = $sql->fetch(PDO::FETCH_OBJ);
    }
}
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar Datos</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
            </head>
            <body>
                <div class="container">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $producto->id ?>">
                        <legend>EDITAR DATOS</legend>
                        <div class="mb-3">
                            <label for="nombre">NOMBRE</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $producto->nombre ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">PRECIO</label>
                            <input type="text" id="precio" name="precio" value="<?php echo $producto->precio ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CANTIDAD</label>
                            <textarea id="cantidad" name="cantidad" class="form-control" required><?php echo $producto->cantidad ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="/" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </body>
            </html>

    

