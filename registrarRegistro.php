<?php
include 'coneccion.php';
$id_cajon=$_POST['id_cajon'];
$id_vehiculo=$_POST['id_vehiculo'];
$id_tarifa=$_POST['id_tarifa'];

$fecha_ingreso = date("Y-m-d");
$hora_ingreso = date("H:i:s");

$con ="INSERT INTO registro(id_cajon,id_vehiculo,id_tarifa,fecha_ingreso,hora_ingreso)VALUES('".$id_cajon."','".$id_vehiculo."','".$id_tarifa."','".$fecha_ingreso."','".$hora_ingreso."')";
    if($datos=mysqli_query($conexion,$con)){
        echo "Datos insertados correctamente";
    }else{
        echo "Error al insertar los datos";
    }

?>