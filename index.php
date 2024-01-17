<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienbenido al sistema de estacionamiento</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body style= "background: #eee;">
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center aling-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="img/logo.avif" alt="logo" style="width:185px;">
                                        <h4 class="mt-1 mb-5 pb-1">Bienvenido al Sistema</h4>
                                    </div>
                                    <form action="login.php" method="post">
                                        <p class="text-center mb-4">ingresa los datos de tu cuenta</p>
                                        <div class="form-outline mb-4">
                                            <label for="" class="form-label" > Usuario</label>
                                            <input type="text" id="usuario" class="form-control" placeholder="Usuario" name="usuario"/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label for="" class="form-label" > Contraseña</label>
                                            <input type="password" id="contraseña" class="form-control" placeholder="Contraseña" name="contraseña"/>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 " type="submit">Ingresar</button>
                                            <a href="" class="text-muted">olvide mi contraseña</a>
                                        </div>
                                        <div class="d-flex aling-items-center justify-content-center ph-4">
                                            <p class="mb-0 me-2">no tengo cuenta</p>
                                            <button type="submit" class="btn btn-outline-danger">Crear cuenta</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex aling-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4 text-center">
                                    <h4 class="mb-4">Bienvenido al sistema de control de estacionamiento</h4>
                                    <p class="small mb-0">Este sistema está diseñado para facilitar la gestión de los estacionamientos. Los empleados del estacionamiento pueden utilizarlo para realizar las siguientes tareas:

Insertar registros de vehículos: Los empleados pueden introducir la información de los vehículos que ingresan al estacionamiento, incluyendo la matrícula, la marca, el modelo y el color del vehículo.
Insertar registros de clientes: Los empleados pueden crear registros de los clientes que utilizan el estacionamiento, incluyendo su nombre, su dirección y su número de teléfono.
Insertar registros de cajones: Los empleados pueden crear registros de los cajones del estacionamiento, incluyendo su ubicación, su tamaño y su tarifa.
Insertar registros de tarifas: Los empleados pueden crear registros de las tarifas de estacionamiento, incluyendo la tarifa por hora, la tarifa por día y la tarifa mensual.
Registros: Los empleados pueden consultar los registros del estacionamiento, incluyendo los registros de vehículos, los registros de clientes, los registros de cajones y los registros de tarifas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<script src="scripts/js/bootstrap.bundle.min.js></script>
</body>
</html>