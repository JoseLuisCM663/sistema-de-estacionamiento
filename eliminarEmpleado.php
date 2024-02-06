<?php
include 'coneccion.php';
$ide=$_POST['ide'];

$sql="DELETE FROM empleados WHERE id_empleado='".$ide."'";

if($datos=mysqli_query($conexion,$sql)){
    echo "cliente eliminado";
}else{
    echo "cliente al eliminar";
}
?>
