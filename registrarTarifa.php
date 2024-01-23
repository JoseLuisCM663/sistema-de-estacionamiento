<?php
include 'coneccion.php';
$tarifa=$_POST['tarifa'];
$monto=$_POST['monto'];

$con="INSERT INTO tarifa(tarifa,monto)VALUES('".$tarifa."','".$monto."')";
if($datos=mysqli_query($conexion,$con)){
    echo "Datos insertados correctamente";
}else{
    echo "Error al insertar los datos";
}    
?>