<?php

    //variables de conecxion con el server
    $DB_HOST='localhost';
    $DB_USER='root';
    $DB_PASSWORD='';
    $DB_NAME='estacionamiento';
    $DB_PORT='3306';

    //conexio0n con la BD
    $conexion=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
    //comprobar conexion
    if(mysqli_connect_error()){
        exit('falla en la conexion con mysql:'.mysqli_connect_error());
    }else{
       // echo 'conexion exitosa';
    }
?>