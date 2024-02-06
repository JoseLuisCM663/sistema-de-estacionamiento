<?php
include 'coneccion.php';
$id=$_POST['id'];

$sql="DELETE FROM cajon WHERE id_cajon='".$id."'";

if($datos=mysqli_query($conexion,$sql)){
    echo "cajon eliminado";
}else{
    echo "error al eliminar";
}
?>
