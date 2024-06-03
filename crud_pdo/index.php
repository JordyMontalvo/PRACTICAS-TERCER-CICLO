<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<div class="container">
<body>
<br>
  </body>
</div>
<div class="container">
<di></di>
<table class="table table-blue table-striped-columns">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">TOTAL</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
 <?php
include"conexion.php";
$sql=$conexion->query("SELECT *FROM PRODUCTO");
$fila=$sql->fetchAll(PDO::FETCH_OBJ);

foreach($fila as $row){

  $total = $row->cantidad * $row->precio;

  $updateQuery = "UPDATE PRODUCTO SET TOTAL = :total WHERE id = :id";
  $stmt = $conexion->prepare($updateQuery);
  $stmt->bindParam(':total', $total);
  $stmt->bindParam(':id', $row->id);
  $stmt->execute();
?>  
 <tr>
<th scope="row"><?php echo $row->id?></th>
<td><?php echo $row->nombre?></td>
<td><?php echo $row->precio?></td>
<td><?php echo $row->cantidad?></td>
<td><?php echo $total ?></td>
<td>
<a href="/editar.php?id=<?php echo $row->id ?>" class='btn btn-danger'>Actualizar carrito</a>
  <a href="/eliminar.php?id=<?php echo $row->id ?>"class='btn btn-danger'>eliminar</a>
</td>
 </tr>
<?php
}
?>
  </tbody>
</table>
<a href="/agregar.php"class='btn btn-warning'>Agregar Producto</a>
</div>
</body>
</html>