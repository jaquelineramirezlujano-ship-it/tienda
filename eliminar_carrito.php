<?php
include "conexion.php";
$id = $_GET['id'];

$sql = "DELETE FROM carrito WHERE id=$id";

$conexion->query($sql);

header("Location: carrito.php");
?>