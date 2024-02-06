<h2>Actualizar Cluente</h2>
<?php

include 'coneccion.php';
$idcliente=$_POST['idcliente'];
$query="SELECT * FROM cliente WHERE Id_cliente='".$idcliente."'";
$ejecutar=$conexion->query($query);
while($result=$ejecutar->fetch_array()){
    


?>
<form id="frmClientes" name="frmClientes">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $result['nombre']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $result['correo']; ?>">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-7">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $result['direccion']; ?>" >
            </div>
            <div class="form-group col-md-5">
                <label for="numero">Numero</label>
                <input type="number" class="form-control" name="numero" id="numero" value="<?php echo $result['numero']; ?>">
            </div>
        </div>
        
       
        <input type="button" class="btn btn-warning btn-block" onclick="modificarCliente(<?php echo $idcliente;?>);" value="Actualizar">
        <input type="button" class="btn btn-danger btn-block" onclick="cancelar();" value="Cancelar">
    </form>

<?php
}
?>