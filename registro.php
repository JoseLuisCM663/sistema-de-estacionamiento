<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Formulario de Registro</title>
</head>
<body style="background: #eee;">
    <section class="h-200 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-50">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center" >
                                <h4 class="mt-1 mb-5 pb-1">Formulario de Registro</h4>
                            </div>
                            <form id="registro" name="registro">
                                <p class="text-center mb-4">Ingresa los datos del registro</p>

                                <div class="form-outline mb-4" >
                                    <label for="id_vehiculo" class="form-label">Vehículo</label>
                                    <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                                        <option value="">selecciona un vehiculo</option>
                                        <?php
                                            include 'coneccion.php';
                                            $query = "SELECT id_vehiculo, matricula FROM vehículo";
                                            $ejecutar = $conexion->query($query);
                                            while($result = $ejecutar->fetch_array()) {
                                                echo "<option value='".$result['id_vehiculo']."'>".$result['matricula']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="cajon" class="form-label">Cajon</label>
                                    <select class="form-control" name="id_cajon" id="id_cajon">
                                        <option value="">selecciona un cajon</option>
                                        <?php
                                            include 'coneccion.php';
                                            $query = "SELECT id_cajon, numero FROM cajon";
                                            $ejecutar = $conexion->query($query);
                                            while($result = $ejecutar->fetch_array()) {
                                                echo "<option value='".$result['id_cajon']."'>".$result['numero']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="id_tarifa" class="form-label">Tarifa</label>
                                    <select class="form-control" name="id_tarifa" id="id_tarifa">
                                        <option value="">selecciona la tarifa</option>
                                        <?php
                                            include 'coneccion.php';
                                            $query = "SELECT id_tarifa, tarifa FROM tarifa";
                                            $ejecutar = $conexion->query($query);
                                            while($result = $ejecutar->fetch_array()) {
                                                echo "<option value='".$result['id_tarifa']."'>".$result['tarifa']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-6" onclick="registrarRegistro();" style="width:300px;" type="submit" on>Ingresar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="scripts/js/bootstrap.bundle.min.js"></script>
</body>
</html>
