<?php
include "conexion.php";

$id = $_GET['id'];

$producto = $conexion->query("SELECT * FROM carrito WHERE id=$id")->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar producto</title>
</head>
<body>

<h2>Editar producto</h2>

<form action="update_carrito.php" method="POST">
    <input type="hidden" name="id" value="<?= $producto['id'] ?>">

    producto: <input type="text" name="nombre" value="<?= $producto['producto'] ?>"><br><br>
    Precio: <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>"><br><br>
    Cantidad: <input type="number" name="cantidad" value="<?= $producto['cantidad'] ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>