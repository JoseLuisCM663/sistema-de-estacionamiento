<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Inserte los datos de la tarifa</title>
</head>
<body style="background: #eee;">
    <section class="h-200 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-50">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="col-lg-12">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <h4 class="mt-1 mb-5 pb-1">Formulario de Tarifa</h4>
                            </div>
                            <form id="Tarifa" name="Tarifa">
                                <p class="text-center mb-4">Ingresa los datos de la tarifa</p>

                                <div class="form-outline mb-4">
                                    <label for="tarifa" class="form-label">Tarifa</label>
                                    <input type="text" id="tarifa" class="form-control" placeholder="Nombre" name="tarifa" required>
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="monto" class="form-label">Monto</label>
                                    <input type="number" id="monto" class="form-control" placeholder="Monto" name="monto" required>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-6" onclick="registrarTarifa();" style="width:300px;">Registrar</button>
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
