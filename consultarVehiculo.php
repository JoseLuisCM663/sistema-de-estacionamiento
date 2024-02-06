<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Color</th>
                <th scope="col">Puertas</th>
                <th scope="col">Tipo</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>

            </tr>
        </thead>
    <tbody>
        <?php
            include 'coneccion.php';
            $query="SELECT id_vehiculo,matricula,color,puertas,tipo FROM vehículo";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['matricula']."</td>
                <td>".$result['color']."</td>
                <td>".$result['puertas']."</td>
                <td>".$result['tipo']."</td>
                <td><a href='#' onclick='editarVehiculo(".$result['id_vehiculo'].");'>Editar</a></td>
                <td><a href='#' onclick='eliminarVehiculo(".$result['id_vehiculo'].");'>Eliminar</a></td>
                </tr>";

            }
        ?>
    </tbody>
    </table>
</div>