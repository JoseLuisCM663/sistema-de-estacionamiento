<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
    <tbody>
        <?php
            include 'coneccion.php';
            $query="SELECT id_cajon,numero FROM cajon";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['numero']."</td>
                <td><a  onclick='eliminarCajon(".$result['id_cajon'].");' >Eliminar</a></td>
                </tr>";

            }
        ?>
    </tbody>
    </table>
</div>