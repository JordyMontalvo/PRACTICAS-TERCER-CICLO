<?php
if(isset($_GET['id']) && !empty($_GET['id'])) {
    include "conexion.php";
    $id = $_GET['id'];
    $sql = $conexion->prepare("DELETE FROM PRODUCTO WHERE id = ?");
    $sql->execute([$id]);
    header("Location: /");
} else {
    echo "ID de producto no proporcionado.";
}

