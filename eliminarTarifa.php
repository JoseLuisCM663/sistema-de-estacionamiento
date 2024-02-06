<?php
include 'coneccion.php';
$idtr=$_POST['idtr'];

$sql="DELETE FROM tarifa WHERE id_tarifa='".$idtr."'";

if($datos=mysqli_query($conexion,$sql)){
    echo "tarifa eliminado";
}else{
    echo "tarifa al eliminar";
}
?>
