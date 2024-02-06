<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
    <tbody>
        <?php
            include 'coneccion.php';
            $query="SELECT id_empleado,nombre,direccion,telefono,email,usuario FROM empleados";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['nombre']."</td>
                <td>".$result['direccion']."</td>
                <td>".$result['telefono']."</td>
                <td>".$result['email']."</td>
                <td>".$result['usuario']."</td>
                <td><a href='#' onclick='editarEmpleado(".$result['id_empleado'].");'>Editar</a></td>
                <td><a href='#' onclick='eliminarEmpleado(".$result['id_empleado'].");'>Eliminar</a></td>
                </tr>";

            }
        ?>
    </tbody>
    </table>
</div>