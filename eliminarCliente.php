<?php
include 'coneccion.php';
$idt=$_POST['idt'];

$sql="DELETE FROM cliente WHERE id_cliente='".$idt."'";

if($datos=mysqli_query($conexion,$sql)){
    echo "cliente eliminado";
}else{
    echo "cliente al eliminar";
}
?>
