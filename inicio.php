<h1>Inicio</h1>
<?php
 include 'coneccion.php';
 $query="SELECT id_cajon,numero,estatus FROM cajon ORDER BY numero ";
 $ejecutar=$conexion->query($query);
 echo "<div class='row'>";
 while($result=$ejecutar->fetch_array()){
    echo "<div class='col-sm-3'>
            <div class='card' style='width: 14rem;'>
            <img src='img/vehiculo.png' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>Cajon".$result['numero']."</h5>";
            if($result['estatus']==1){
                $query2="SELECT * FROM registro INNER JOIN vehículo ON vehículo.id_vehiculo=registo.id_vehiculo INNER JOIN cajon ON cajon.id_cajon=registro.id_cajon INNER JOIN tarifa ON tarifa.id_tarifa=registro.id_tarifa INNER JOIN empleados ON empleado.id_empleado=registro.id_empleado WHERE registro.id_cajon=1";
                $ejecutar2=$conexion->query($query2);
                while($result2=$ejecutar2->fetch_array()){
                    echo "<h4>Matricula:".$result2['matricula']."</h4>";
                    echo "<p>".$result2['fecha_ingreso']."".$result2['hora_ingreso']."</p>";
                    echo "<p>".$result2['tarifa']."".$result2['monto']."hora</p>";
                    echo "<p>".$result2['fecha_ingreso']."</p>";
                }
                echo "<a href='#' class='btn btn-warning'>Salir</a>";
            }else{
                echo "<p class='card-text'>cajon libre</p>";
                echo "<a href='#' class='btn btn-info' onclick='abrirModal(".$result['id_cajon'].")'>ocupar</a>";
            }
        echo "
        </div>
        </div>
        </div>";
 }
?>