<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Formulario de Vehículo</title>
</head>
<body style="background: #eee;">
    <section class="h-200 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-50">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Formulario de Vehículo</h4>
                            </div>
                            <form action="procesar_formulario.php" method="post">
                                <p class="text-center mb-4">Ingresa los datos del vehículo</p>

                                <div class="form-outline mb-4">
                                    <label for="matricula" class="form-label">Matrícula</label>
                                    <input type="text" id="matricula" class="form-control" placeholder="Matrícula" name="matricula" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="modelo" class="form-label">Modelo</label>
                                    <input type="text" id="modelo" class="form-control" placeholder="Modelo" name="modelo" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" id="color" class="form-control" placeholder="Color" name="color" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="puertas" class="form-label">Número de Puertas</label>
                                    <input type="number" id="puertas" class="form-control" placeholder="Número de Puertas" name="puertas" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="tipo_cliente" class="form-label">Tipo de Cliente</label>
                                    <input type="text" id="tipo_cliente" class="form-control" placeholder="Tipo de Cliente" name="tipo_cliente" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="id_cliente" class="form-label">Cliente</label>
                                    <select class="form-control" name="id_cliente" id="id_cliente">
                                        <option value="">selecciona un cliente</option>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-6" style="width:300px;" type="submit">Ingresar</button>
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
