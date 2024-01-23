<?php
include 'coneccion.php';

$matricula=$_POST['matricula'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$puertas=$_POST['puertas'];
$tipo=$_POST['tipo'];
$id_cliente=$_POST['id_cliente'];


$con = "INSERT INTO vehículo(matricula,modelo,color,puertas,tipo,id_cliente)VALUES('".$matricula."','".$modelo."','".$color."','".$puertas."','".$tipo."','".$id_cliente."')";
    if($datos=mysqli_query($conexion,$con)){
        echo "Datos insertados correctamente";
    }else{
        echo "Error al insertar los datos";
    }
?>