<?php
include 'coneccion.php';
$id_cajon = $_POST['id_cajon'];
$id_vehiculo = $_POST['id_vehiculo'];
$id_tarifa = $_POST['id_tarifa'];
$fecha_ingreso = date("Y-m-d");
$hora_ingreso = date("H:i:s");
$id_encargado=$_SESSION['id'];
$name=$_SESSION['name'];


echo $name;

/*
$query = "INSERT INTO registro (id_cajon, id_vehiculo, id_tarifa,fecha_ingreso,hora_ingreso,id_empleado) VALUES ('".$id_cajon."','".$id_vehiculo."','".$id_tarifa."','".$fecha_ingreso."','".$hora_ingreso."','".$id_usuario."')";

$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar los datos";
}

?>
*/