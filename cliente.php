<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Inserte los datos del cliente</title>
</head>
<body style="background: #eee;">
    <section class="h-200 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-50">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Formulario del cliente</h4>
                            </div>
                            <form id="Clientes" name="Clientes">
                                <p class="text-center mb-4">Ingresa los datos del cliente</p>

                                <div class="form-outline mb-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="direccion" class="form-label">Direccion</label>
                                    <input type="text" id="direccion" class="form-control" placeholder="direccion" name="direccion" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="text" id="telefono" class="form-control" placeholder="Telefono" name="telefono" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="correo" class="form-label">Correo</label>
                                    <input type="gmail" id="correo" class="form-control" placeholder="Correo Electronico" name="correo" required>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                <input value="Registrar" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-6" onclick="registrarCliente();" style="width:300px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br>
    <div>
        <?php
        include 'consultarCliente.php'
        ?>
    </div>

    <script src="scripts/js/bootstrap.bundle.min.js"></script>
</body>
</html>
