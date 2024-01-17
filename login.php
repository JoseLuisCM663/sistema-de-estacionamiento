<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="scripts/js/funciones.js"></script>
</head>
<body>
<?php
    include 'coneccion.php';
    session_start();
    //validar si se reciben parametros del metodo post
    if(!isset($_POST['usuario'],$_POST['contraseña'])){
        header('Location:index.php');
    }
    //evitar inyeccion SQL
    if($stmt=$conexion->prepare('SELECT usuario,contraseña FROM empleados WHERE usuario=?')){
        $stmt->bind_param('s',$_POST['usuario']);
        $stmt->execute();
    }
    //verificar si lo ingresado coincide con la BD
    $stmt->store_result();
    if($stmt->num_rows>0){
        $stmt->bind_result($usuario,$contraseña);
        $stmt->fetch();
        if($_POST['contraseña']===$contraseña){
            session_regenerate_id();
            $_SESSION['loggedin']=TRUE;
            $_SESSION['name']=$_POST['usuario'];
            $_SESSION['id']=$id;
            header('Location:menu.php');
        }else{
            echo '<script language="javascript">msjErrorPassword();</script>';
        }
    }else{
        echo '<script language="javascript">msjErrorUser();</script>';
    }
    $stmt->close();
?>
</body>
</html>