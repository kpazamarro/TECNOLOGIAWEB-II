<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Oficina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Registro de Oficina</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="officeName" class="form-label">Nombre de la Oficina</label>
                            <input type="text" class="form-control" id="officeName" placeholder="Nombre de la Oficina">
                        </div>
                        <div class="mb-3">
                            <label for="officeAddress" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="officeAddress" placeholder="Dirección de la Oficina">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" id="city" placeholder="Ciudad">
                        </div>
                        <div class="mb-3">
                            <label for="state" class="form-label">Estado/Provincia</label>
                            <input type="text" class="form-control" id="state" placeholder="Estado/Provincia">
                        </div>
                        <div class="mb-3">
                            <label for="zip" class="form-label">Código Postal</label>
                            <input type="text" class="form-control" id="zip" placeholder="Código Postal">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Número de Teléfono">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
