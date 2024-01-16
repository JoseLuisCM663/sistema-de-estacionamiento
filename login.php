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
            echo '<script language="javascript">alert("contraseña incorrecta");location.href="index.php"</script>';
        }
    }else{
        echo '<script language="javascript">alert("usuario incorrecto");location.href="index.php"</script>';
    }
    $stmt->close();
?>