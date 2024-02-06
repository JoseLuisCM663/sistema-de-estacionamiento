<?php
include 'coneccion.php';
$idv=$_POST['idv'];

$sql="DELETE FROM vehículo WHERE id_vehiculo='".$idv."'";

if($datos=mysqli_query($conexion,$sql)){
    echo "vehiculo eliminado";
}else{
    echo "vehiculo al eliminar";
}
?>
