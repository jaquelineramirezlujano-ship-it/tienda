<?php
$usuario = "root"; //el usuario
$password = "";  //contraseña
$servidor = "localhost";//servidor local
$basededatos = "registro3"; //nombre de la base de datos

$conexion = mysqli_connect ($servidor, $usuario, "") or die ("Error en el servidor en la Base de Datos");

$db = mysqli_select_db($conexion, $basededatos) or die ("Error al conectarse a la base de Datos");

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$confirmar_contraseña=$_POST['confirmar_contraseña'];


$sql="INSERT INTO datos VALUES('$nombre', '$apellidos','$correo','$contraseña', ' $confirmar_contraseña')";
$ejecutar=mysqli_query($conexion, $sql); //se manda llamar la conexion y sql donde se encuentran los parametros

if(!$ejecutar){
echo"Huvo un error";
}else{
echo"Datos Guardados Correctamente<br><a href='Formulario.html'> volver</a>";
}
?>