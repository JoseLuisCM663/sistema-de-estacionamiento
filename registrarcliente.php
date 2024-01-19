<?php
include 'coneccion.php';

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$con ="INSERT INTO cliente(nombre,direccion,telefono,correo)VALUES('".$nombre."','".$direccion."','".$telefono."','".$correo."')";
    if($datos=mysqli_query($conexion,))
?>