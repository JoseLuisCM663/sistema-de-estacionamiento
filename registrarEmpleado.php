<?php
include 'coneccion.php';

$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];


$con ="INSERT INTO empleados(nombre,direccion,telefono,email,usuario,contraseña)VALUES('".$nombre."','".$direccion."','".$telefono."','".$correo."','".$usuario."','".$contra."')";
    if($datos=mysqli_query($conexion,$con)){
        echo "Datos insertados correctamente";
    }else{
        echo "Error al insertar los datos";
    }
?>
