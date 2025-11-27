<?php
include "conexion.php";

$id = $_POST['id'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];


$sql = "UPDATE carrito SET 
        producto='$producto',
        precio='$precio',
        cantidad='$cantidad'
        total='$total'

        WHERE id=$id";

$conexion->query($sql);

header("Location: carrito.php");
?>