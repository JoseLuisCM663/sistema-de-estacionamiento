<?php
include 'coneccion.php';

$numero=$_POST['numero'];
echo $numero;

$con ="INSERT INTO cajon(numero)VALUES('".$numero."')";
echo $con;
    if($datos=mysqli_query($conexion,$con)){
        echo "Datos insertados correctamente";
    }else{
        echo "Error al insertar los datos";
    }
?>
