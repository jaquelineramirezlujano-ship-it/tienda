<?php
include "conexion.php";

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];

$sql = "INSERT INTO carrito (nombre, precio, cantidad, total) 
        VALUES ('$nombre', '$precio', '$cantidad', '$total')";

if ($conexion->query($sql) === TRUE) {
    echo "Producto agregado";
} else {
    echo "Error: " . $conexion->error;
}
?>